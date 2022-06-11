<?php

namespace App\Http\Service;

use App\Models\Meta\MetaKind\MetaKind;
use App\Models\Meta\MetaObject\MetaObject;
use Fhaculty\Graph\Graph;
use Fhaculty\Graph\Vertex;
use Graphp\Algorithms\Search\DepthFirst;
use Graphp\Algorithms\Tree\OutTree;
use Relaxed\LCA\LowestCommonAncestor;

class RelationFilterQueryBuilder
{
    private array $select;
    private array $aggregation;
    public Graph $conditions;
    private array $groupBy;
    private array $join;

    private Graph $graph;
    private OutTree $tree;
    private array $vertices;

    private string $lca;
    private array $joinPath;

    public function __construct()
    {
        $this->select = [];
        $this->aggregation = [];
        $this->conditions = new Graph();
        $this->groupBy = [];
        $this->join = [];

        $this->buildGraph();
    }

    public function addColumnToSelect($table, $column)
    {
        $this->select[$table][] = $column;
        $this->join[$table] = true;
    }

    public function addTableToJoin($table)
    {
        $this->join[$table] = true;
    }

    public function addConditionVertex($vertexName, $type, $value, $parent = null)
    {
        $vertex = $this->conditions->createVertex();
        $vertex->setAttribute('type', $type);
        $vertex->setAttribute('value', $value);
        $vertex->setAttribute('name', $vertexName);

        if ($parent !== null) {
            $this->conditions->getVertex($parent->getId())->createEdgeTo($vertex);
        }
        return $vertex;
    }

    public function addAggregationFunction($table, $column, $function)
    {
        $this->aggregation[] = [
            'table' => $table,
            'column' => $column,
            'function' => $function
        ];
        $this->join[$table] = true;
    }

    public function addGroupBy($table, $column)
    {
        $this->groupBy[] = [
            'table' => $table,
            'column' => $column
        ];
    }

    public function buildQuery()
    {
        $selectSubQuery = $this->getSelectSubQuery();
        $joinSubQuery = $this->getJoinSubQuery();
        $whereSubQuery = $this->getWhereSubQuery();

        $select = 'SELECT ' . $selectSubQuery;
        $from = ' FROM ' . $joinSubQuery . ' AND ';
        $where =  $whereSubQuery;
        return $select . $from . $where;
    }

    private function buildGraph()
    {
        $relations = $this->getRelations();
        $graph = new Graph();

        $vertices = [];
        foreach ($relations as $relation) {
            $vertices[$relation['source']] = $graph->createVertex($relation['source']);
        }
        foreach ($relations as $relation) {
            foreach ($relation['relations'] as $join) {
                $vertices[$join['target']]
                    ->createEdgeTo($vertices[$relation['source']])
                    ->setAttribute('source_col', $join['source_col']);
            }
        }
        $tree = new OutTree($graph);
        foreach ($vertices as &$vertex) {
            $vertex->setAttribute('height', $tree->getHeight($vertex));
        }
        unset($vertex);

        $this->graph = $graph;
        $this->vertices = $vertices;
        $this->tree = $tree;
    }

    private function getRelations()
    {
        $entityKindId = MetaKind::where('name', 'object')->first()->meta_kind_id;

        $relations = MetaObject::where('meta_kind_id', $entityKindId)
            ->with([
                    'relations' => function ($query) {
                        $query->select(['source_id', 'source_col_id', 'target_id'])
                            ->with(['foreing:meta_object_id,object', 'target:meta_object_id,object']);
                    }
                ]
            )
            ->select(['meta_object_id', 'object'])
            ->get()
            ->toArray();

        $result = [];
        foreach ($relations as $relation) {
            $joins = [];
            foreach ($relation['relations'] as $join) {
                $joins[] = [
                    'source_col' => $join['foreing']['object'],
                    'target' => $join['target']['object']
                ];
            }
            $result[] = [
                'source' => $relation['object'],
                'relations' => $joins
            ];
        }

        return $result;
    }

    private function calculateLCA()
    {
        $instance = new LowestCommonAncestor($this->graph);
        $tables = array_keys($this->join);

        $maxHeight = 0;
        $resultLCA = '';
        foreach ($tables as $first) {
            foreach ($tables as $second) {
                if ($first == $second) continue;

                $lca = $instance->find($this->vertices[$first], $this->vertices[$second]);

                $currentHeight = $this->vertices[$lca->getId()]->getAttribute('height');
                if ($currentHeight > $maxHeight) {
                    $resultLCA = $lca->getId();
                    $maxHeight = $currentHeight;
                }

                if ($lca->getId() === $this->tree->getVertexRoot()->getId()) {
                    $resultLCA = $this->tree->getVertexRoot()->getId();
                    break;
                }
            }
            if ($resultLCA === $this->tree->getVertexRoot()->getId()) {
                break;
            }
        }
        $this->lca = $resultLCA;
    }

    private function calculateJoinPath()
    {
        $tables = array_keys($this->join);
        $joinPath = [];
        foreach ($tables as $table) {
            $vertex = $table;
            $parent = $this->vertices[$table];
            while ($parent !== null && $parent->getId() !== $this->lca) {
                $parent = $this->tree->getVertexParent($parent);
                $joinPath[$table][] = [
                    'source' => $vertex,
                    'join' => $this->vertices[$vertex]->getEdges()->getEdgeFirst()->getAttribute('source_col'),
                    'target' => $parent->getId(),
                ];
                $vertex = $parent->getId();
            }
        }
        $this->joinPath = $joinPath;
    }

    private function getSelectSubQuery()
    {
        $queryArray = [];
        foreach ($this->select as $table => $columns) {
            foreach ($columns as $column) {
                $queryArray[] = $table . '.' . $column;
            }
        }
        foreach ($this->aggregation as $aggregation) {
            $queryArray[] = sprintf('%s(%s.%s)', $aggregation['function'], $aggregation['table'], $aggregation['column']);
        }
        return implode(', ', $queryArray);
    }

    private function getJoinSubQuery()
    {
        $this->calculateLCA();
        $this->calculateJoinPath();

        $fullTables = [];
        $whereFormat = '%s.%s = %s.%s';
        $joinConditions = [];
        foreach ($this->joinPath as $table => $joins) {
            $fullTables[$table] = true;
            foreach ($joins as $join) {
                $fullTables[$join['target']] = true;
                $targetId = substr($join['target'], 0, -1) . '_id';
                $joinConditions[] = sprintf($whereFormat, $join['source'], $join['join'], $join['target'], $targetId);
            }
        }
        $fullTables = array_keys($fullTables);

        $joinQuery =  implode(',', $fullTables) . ' WHERE (' . implode(' AND ', $joinConditions) . ')';

        return $joinQuery;
    }

    public function getWhereSubQuery()
    {
        $tree = new OutTree($this->conditions);
        $query = '';
        $this->constraintTreeTravelation($tree->getVertexRoot(), $tree, $query);
        return $query;
    }

    public function constraintTreeTravelation(Vertex $vertex, OutTree $tree, &$query)
    {
        $type = $vertex->getAttribute('type');
        $value = $vertex->getAttribute('value');

        if ($tree->isVertexLeaf($vertex)) {
            $query .= $value;
        }

        if ($type !== 'column' && $type !== 'value' && $type !== 'condition') {
            $query .= $value . '(';
        }
        if ($type === 'condition') {
            $childs = $tree->getVerticesChildren($vertex);
            $values = [];
            /* @var $child Vertex */
            foreach ($tree->getVerticesChildren($vertex) as $child) {
                $values[] = $child->getAttribute('value');
            }
            $query .= implode($value, $values);
        } else {
            /* @var $child Vertex */
            foreach ($tree->getVerticesChildren($vertex) as $child) {
                $this->constraintTreeTravelation($child, $tree, $query);
            }
        }
        if ($type !== 'column' && $type !== 'value' && $type !== 'condition') {
            $query .= ')';
        }
    }
}
