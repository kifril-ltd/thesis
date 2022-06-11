<?php

namespace App\Http\Controllers\Home\ListItem;

use App\Http\Controllers\Controller;
use App\Http\Service\Notification;
use App\Models\Structure\StructureList\StructureList;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ListItemController extends Controller
{
    public function getLists(Request $request): JsonResponse
    {
        $listIds = $request->get('listIds');

        if ($listIds && is_array($listIds)) {
            $result = StructureList::with('items')->whereIn('structure_list_id', $listIds)->get();
            return new JsonResponse([
                'result' => $result,
            ]);
        } else {
            $notification = new Notification('Неверный формат переданных данных!', 'Получение списка', 'danger');
            return new JsonResponse([
                'notification' => $notification->toArray(),
            ]);
        }
    }

    public function createList(): JsonResponse
    {
        $notification = new Notification('Пока нет возможности создать список!', 'Создание списка', 'warning');
        return new JsonResponse([
            'notification' => $notification->toArray(),
        ]);
    }

    public function changeList(string $listId): JsonResponse
    {
        $notification = new Notification('Пока нет возможности изменить список!', 'Изменение списка', 'warning');
        return new JsonResponse([
            'notification' => $notification->toArray(),
        ]);
    }

    public function deleteList(string $listId): JsonResponse
    {
        $notification = new Notification('Пока нет возможности удалить список!', 'Удаление списка', 'warning');
        return new JsonResponse([
            'notification' => $notification->toArray(),
        ]);
    }

    public function createItem(string $listId): JsonResponse
    {
        $notification = new Notification('Пока нет возможности создать элемент списка!', 'Создание элемента списка', 'warning');
        return new JsonResponse([
            'notification' => $notification->toArray(),
        ]);
    }

    public function changeItem(string $listId, string $itemId): JsonResponse
    {
        $notification = new Notification('Пока нет возможности изменить элемент списка!', 'Изменение элемента списка', 'warning');
        return new JsonResponse([
            'notification' => $notification->toArray(),
        ]);
    }

    public function deleteItem(string $listId, string $itemId): JsonResponse
    {
        $notification = new Notification('Пока нет возможности удалить элемент списка!', 'Удаление элемента списка', 'warning');
        return new JsonResponse([
            'notification' => $notification->toArray(),
        ]);
    }
}
