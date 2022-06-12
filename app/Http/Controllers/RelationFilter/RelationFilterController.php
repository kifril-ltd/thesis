<?php

namespace App\Http\Controllers\RelationFilter;

use App\Exports\RelationFilterReportExport;
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
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Relaxed\LCA\LowestCommonAncestor;

class RelationFilterController extends Controller
{
    private array $headers = [];

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

    public function buildReport(Request $request)
    {
        $data = json_decode($request->getContent(), true)['data'];
        $queryBuilder = new RelationFilterQueryBuilder();
        $this->buildQueryBuilder($data['where'], 'group', null, $queryBuilder);
        $this->buildSelect($data['select'], $queryBuilder);
        $query = $queryBuilder->buildQuery();
        $result = DB::select($query);

        $report = new RelationFilterReportExport($this->headers, $result);

        $filename = Carbon::now()->format('Ymdhms').'-Report.xlsx';
        Excel::store($report, $filename);
        $fullPath = Storage::url($filename);

        return $report->download('report.csv', \Maatwebsite\Excel\Excel::CSV,  [
            'Content-Type' => 'text/csv',
        ]);
    }

    private function buildQueryBuilder($array, $type, $parent, RelationFilterQueryBuilder $queryBuilder)
    {
        foreach ($array as $item) {
            if ($type === 'group') {
                $group = $queryBuilder->addConditionVertex($item['name'], 'group', $item['prefix'], $parent);
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
                if ($column['isChecked'] || $column['isGroupBy']) {
                    if ($column['isGroupBy']) {
                        $queryBuilder->addGroupBy($table['object'], $column['object']);
                    }
                    if ($column['aggregation']) {
                        $queryBuilder->addAggregationFunction($table['object'], $column['object'], $column['aggregation']);
                        $this->headers[] = sprintf('%s(%s/%s)', $column['aggregation'], $table['caption'], $column['caption']);
                    } else {
                        $queryBuilder->addColumnToSelect($table['object'], $column['object']);
                        $this->headers[] = sprintf('%s/%s', $table['caption'], $column['caption']);
                    }
                }
            }
        }
    }
}
