<?php

namespace App\Http\Controllers\RelationFilter;

use App\Http\Controllers\Controller;
use App\Http\Service\RelationFilterQueryBuilder;
use App\Models\Meta\MetaKind\MetaKind;
use App\Models\Meta\MetaObject\JoinEntity\JoinEntity;
use App\Models\Meta\MetaObject\MetaObject;
use Fhaculty\Graph\Edge\Directed;
use Fhaculty\Graph\Graph;
use Graphp\Algorithms\Tree\OutTree;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Relaxed\LCA\LowestCommonAncestor;

class RelationFilterController extends Controller
{
    public function getEntitiesInformation(): JsonResponse
    {
        $entityKindId = MetaKind::where('name', 'object')->first()->meta_kind_id;
        $entities = MetaObject::from('meta_objects', 'ent')
            ->where('meta_kind_id', $entityKindId)
            ->with('columns:meta_object_id,caption,object')
            ->select(['meta_object_id', 'object', 'caption'])
            ->get()
            ->toArray();
        return new JsonResponse(['result' => $entities]);
    }

    public function getRelations()
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

    public function buildReport(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $queryBuilder = new RelationFilterQueryBuilder();
        $this->buildQueryBuilder($data['groups'], 'group', null, $queryBuilder);
        $this->buildSelect($data['select'], $queryBuilder);
        $query = $queryBuilder->buildQuery();
        dd($query);
    }

    private function buildQueryBuilder($array, $type, $parent, RelationFilterQueryBuilder $queryBuilder)
    {
        foreach ($array as $item) {
            if ($type === 'group') {
                $group = $queryBuilder->addConditionVertex($item['groupName'], 'group', $item['prefix'], $parent);
                if (isset($item['groups']) && count($item['groups']) > 0) {
                    $this->buildQueryBuilder($item['groups'], 'group', $group, $queryBuilder);
                }
                if (isset($item['tables']) && count($item['tables']) > 0) {
                    $this->buildQueryBuilder($item['tables'], 'table', $group, $queryBuilder);
                }
            }
            if ($type === 'table') {
                $table = $queryBuilder->addConditionVertex($item['tableName'], 'table', $item['prefix'], $parent);
                $queryBuilder->addTableToJoin($item['tableName']);
                if (isset($item['columns']) && count($item['columns']) > 0) {
                    $this->buildQueryBuilder($item['columns'], 'column', $table, $queryBuilder);
                }
            }
            if ($type === 'column') {
                $conditionPrefix = $queryBuilder->addConditionVertex($item['prefix'], 'condition_prefix', $item['prefix'], $parent);
                $condition = $queryBuilder->addConditionVertex($item['condition'], 'condition', $item['condition'], $conditionPrefix);
                $columnName = $parent->getAttribute('name') . '.' . $item['columnName'];
                $queryBuilder->addConditionVertex($item['columnName'], 'column', $columnName, $condition);
                $queryBuilder->addConditionVertex($item['value'], 'value', $item['value'], $condition);
            }
        }
    }

    private function buildSelect($select, RelationFilterQueryBuilder $queryBuilder)
    {
        foreach ($select as $table) {
            foreach ($table['columns'] as $column) {
                if ($column['aggregation']) {
                    $queryBuilder->addAggregationFunction($table['tableName'], $column['columnName'], $column['aggregation']);
                } else {
                    $queryBuilder->addColumnToSelect($table['tableName'], $column['columnName']);
                }
            }
        }
    }
}
