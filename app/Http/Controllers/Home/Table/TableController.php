<?php

namespace App\Http\Controllers\Home\Table;

use App\Http\Controllers\Controller;
use App\Http\Service\Notification;
use App\Models\BoilerRoom\BoilerRoom;
use App\Models\Structure\Structure;
use App\Models\Structure\StructureAttribute\StructureAttribute;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TableController extends Controller
{

    public function getTable(string $tableId, Request $request): JsonResponse
    {
        if ($request->get('limit')) {
            $limit = intval($request->get('limit'));
        } else {
            $limit = 10;
        }

        if ($request->get('page')) {
            $page = intval($request->get('page'));
        } else {
            $page = 1;
        }

        $sortField = 'created_at';
        $sortDirection = 'asc'; // 'desc' | 'asc'
        if ($request->get('sort')) {
            $sortRequest = json_decode($request->get('sort'));
            foreach ($sortRequest as $key => $value) {
                if (is_string($key)) {
                    $sortField = $key;
                }

                if ($value == 'desc' || $value == 'asc') {
                    $sortDirection = $value; // 'desc' | 'asc'
                }

                break;
            }
        }

        $filter = [];
        if ($request->get('filter')) {
            $filterRequest = json_decode($request->get('filter'));
            foreach ($filterRequest as $key => $value) {
                if (isset($value->value) && isset($value->isPart) && $value->isPart && (is_numeric($value->value) || is_string($value->value)) && is_bool($value->isPart)) {
                    $filter[] = [$key, 'like', "%$value->value%"];
                } else if (isset($value->value) && (is_numeric($value->value) || is_string($value->value))) {
                    $filter[] = [$key, '=', $value->value];
                } else if (isset($value->from) && is_numeric($value->from) && isset($value->to) && is_numeric($value->to)) {
                    $filter[] = [$key, '>=', $value->from];
                    $filter[] = [$key, '<=', $value->to];
                } else if (isset($value->from) && is_numeric($value->from)) {
                    $filter[] = [$key, '>=', $value->from];
                } else if (isset($value->to) && is_numeric($value->to)) {
                    $filter[] = [$key, '<=', $value->to];
                }
            }
        }

        $structure = Structure::where('structure_id', $tableId)->with('attributes')->first(['structure_id', 'title']);
        $body = $structure->title::skip(($page - 1) * $limit)->take($limit)->orderBy($sortField, $sortDirection)->where($filter)->get();
        $totalCount = $structure->title::where($filter)->count();
        $structureAttribute = $structure['attributes'];
        $pk = (new $structure->title())->getPrimaryKey();

        return new JsonResponse([
            'result' => [
                'header' => $structureAttribute,
                'body' => $body,
                'pk' => $pk,
            ],
            'canEdit' => $_ENV['USER_ADMIN_ID'] == \Auth::id(), // TODO убрать
            'canDelete' => $_ENV['USER_ADMIN_ID'] == \Auth::id(), // TODO убрать
            'canCreate' => $_ENV['USER_ADMIN_ID'] == \Auth::id(), // TODO убрать
            'totalCount' => $totalCount,
        ]);
    }

    public function createRow(string $tableId, Request $request): JsonResponse
    {
        // TODO убрать
        if ($_ENV['USER_ADMIN_ID'] != \Auth::id()) {
            $notification = new Notification('У вас недостаточно прав на создание записи!', '', '');
            return new JsonResponse([
                'notification' => $notification->toArray(),
            ]);
        }

        try {
            $structure = Structure::where('structure_id', $tableId)->with('attributes')->first(['structure_id', 'title']);
            $attributes = $structure['attributes'];
            $newTable = new $structure->title();
            $fillable = [];

            foreach ($attributes as $key => $value) {
                if ($request->json($value['title'])) {
                    $fillable[$value['title']] = $request->json($value->title);
                }
            }

            $fillable['owner_id'] = \Auth::id();
            $fillable['created_by'] = \Auth::id();
            $fillable['updated_by'] = \Auth::id();
            $fillable['status_id'] = $_ENV['STATUS_DEFAULT_ID'];

            $result = $newTable->fill($fillable)->save();

            return new JsonResponse([
                'result' => $result,
            ]);
        } catch (\Exception $e) {
            $notification = new Notification('Не удалось создать запись!', '', '');
            return new JsonResponse([
                'notification' => $notification->toArray(),
            ]);
        }
    }

    public function changeRow(string $tableId, string $rowId, Request $request): JsonResponse
    {
        // TODO убрать
        if ($_ENV['USER_ADMIN_ID'] != \Auth::id()) {
            $notification = new Notification('У вас недостаточно прав на изменение записи!', '', '');
            return new JsonResponse([
                'notification' => $notification->toArray(),
            ]);
        }

        try {
            $structure = Structure::find($tableId);
            $attributes = StructureAttribute::where('structure_id', $tableId)->get(['title']);
            $changingRow = $structure->title::find($rowId);
            $fillable = [];

            foreach ($attributes as $key => $value) {
                if ($value->title != 'created_by' && $request->json($value->title)) {
                    $fillable[$value->title] = $request->json($value->title);
                }
            }

            $fillable['updated_by'] = \Auth::id();

            $result = $changingRow->fill($fillable)->save();

            return new JsonResponse([
                'result' => $result,
            ]);
        } catch (\Exception $e) {
            $notification = new Notification('Не удалось изменить запись!', '', '');
            return new JsonResponse([
                'notification' => $notification->toArray(),
            ]);
        }
    }

    public function deleteRow(string $tableId, string $rowId): JsonResponse
    {
        // TODO убрать
        if ($_ENV['USER_ADMIN_ID'] != \Auth::id()) {
            $notification = new Notification('У вас недостаточно прав на удаление записи!', '', '');
            return new JsonResponse([
                'notification' => $notification->toArray(),
            ]);
        }

        try {
            $structure = Structure::find($tableId);
            $deletingRow = $structure->title::find($rowId);
            $deletingRow->updated_by = \Auth::id();
            $result = $deletingRow->delete();

            return new JsonResponse([
                'result' => $result,
            ]);
        } catch (\Exception $e) {
            $notification = new Notification('Не удалось удалить запись!', '', '');
            return new JsonResponse([
                'notification' => $notification->toArray(),
            ]);
        }
    }

    public function deleteRows(string $tableId, Request $request): JsonResponse
    {
        // TODO убрать
        if ($_ENV['USER_ADMIN_ID'] != \Auth::id()) {
            $notification = new Notification('У вас недостаточно прав на удаление записи!', '', '');
            return new JsonResponse([
                'notification' => $notification->toArray(),
            ]);
        }

        try {
            $ids = $request->json('rows');
            $structure = Structure::find($tableId);
            $pk = (new $structure->title())->getPrimaryKey();

//            $result = $structure->title::whereIn($pk, $ids)->delete();
            $rows = $structure->title::whereIn($pk, $ids);
            foreach ($rows as $row) {
                $row->updated_by = \Auth::id();
            }
            $result = $rows->delete();

            return new JsonResponse([
                'result' => $result,
            ]);
        } catch (\Exception $e) {
            $notification = new Notification('Не удалось удалить запись!', '', '');
            return new JsonResponse([
                'notification' => $notification->toArray(),
            ]);
        }
    }
}
