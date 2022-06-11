<?php

namespace Database\Seeders\Structure;

use App\Models\Structure\StructureList\StructureList;
use App\Models\Structure\StructureList\StructureListValue\StructureListValue;
use Illuminate\Database\Seeder;
use Str;

class StructureListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StructureList::truncate();
        StructureList::insert([
            [
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'caption' => 'Статус сущности',
                'description' => 'Описание списка Статус сущности',
                'is_secured' => true,
            ],
            [
                'structure_list_id' => $_ENV['STATUS_RELATION_LIST_ID'],
                'caption' => 'Статус отношения',
                'description' => 'Описание списка Статус отношения',
                'is_secured' => true,
            ]
        ]);
        StructureList::insert([
            [
                'structure_list_id' => Str::Uuid()->toString(),
                'caption' => 'Основание передачи котельной, тепловой сети в эксплуатирующую организации',
                'description' => 'Описание списка Основание передачи котельной, тепловой сети в эксплуатирующую организации',
                'is_secured' => true,
            ],
            [
                'structure_list_id' => Str::Uuid()->toString(),
                'caption' => 'Сезонность работы котельной',
                'description' => 'Описание списка Сезонность работы котельной',
                'is_secured' => true,
            ],
            [
                'structure_list_id' => Str::Uuid()->toString(),
                'caption' => 'Количество трубопроводов',
                'description' => 'Описание списка Количество трубопроводов',
                'is_secured' => true,
            ],
            [
                'structure_list_id' => Str::Uuid()->toString(),
                'caption' => 'Тип прокладки',
                'description' => 'Описание списка Тип прокладки',
                'is_secured' => true,
            ],
        ]);
    }
}
