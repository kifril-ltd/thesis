<?php

namespace Database\Seeders\Structure;

use App\Models\Structure\StructureList\StructureList;
use App\Models\Structure\StructureList\StructureListValue\StructureListValue;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StructureListValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StructureListValue::insert([
            [
                'id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'title' => 'Новый',
                'description' => 'Описание списка статуса Новый',
                'is_secured' => true,
            ],
            [
                'id' => Str::Uuid()->toString(),
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'title' => 'Активирован',
                'description' => 'Описание списка статуса Активирован',
                'is_secured' => true,
            ],
            [
                'id' => Str::Uuid()->toString(),
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'title' => 'Деактивирован',
                'description' => 'Описание списка статуса Деактивирован',
                'is_secured' => true,
            ],


            [
                'id' => $_ENV['STATUS_DEFAULT_RELATION_ID'],
                'structure_list_id' => $_ENV['STATUS_RELATION_LIST_ID'],
                'title' => 'Новый',
                'description' => 'Описание списка статуса Новый',
                'is_secured' => true,
            ],
            [
                'id' => Str::Uuid()->toString(),
                'structure_list_id' => $_ENV['STATUS_RELATION_LIST_ID'],
                'title' => 'Активирован',
                'description' => 'Описание списка статуса Активирован',
                'is_secured' => true,
            ],
            [
                'id' => Str::Uuid()->toString(),
                'structure_list_id' => $_ENV['STATUS_RELATION_LIST_ID'],
                'title' => 'Деактивирован',
                'description' => 'Описание списка статуса Деактивирован',
                'is_secured' => true,
            ]
        ]);

        $basis_of_transfer_list_id = StructureList::where('caption', 'Основание передачи котельной, тепловой сети в эксплуатирующую организации')->first()->structure_list_id;

        $seasonality_of_work_id = StructureList::where('caption', 'Сезонность работы котельной')->first()->structure_list_id;

        $number_of_pipelines_id = StructureList::where('caption', 'Количество трубопроводов')->first()->structure_list_id;

        $type_of_gasket_id = StructureList::where('caption', 'Тип прокладки')->first()->structure_list_id;


        StructureListValue::insert([
            [
                'id' => Str::Uuid()->toString(),
                'structure_list_id' => $basis_of_transfer_list_id,
                'title' => 'аренда',
                'description' => 'аренда',
                'is_secured' => true,
            ],
            [
                'id' => Str::Uuid()->toString(),
                'structure_list_id' => $basis_of_transfer_list_id,
                'title' => 'тех. обслуживание',
                'description' => 'тех. обслуживание',
                'is_secured' => true,
            ],
            [
                'id' => Str::Uuid()->toString(),
                'structure_list_id' => $basis_of_transfer_list_id,
                'title' => 'концессия',
                'description' => 'концессия',
                'is_secured' => true,
            ],
            [
                'id' => Str::Uuid()->toString(),
                'structure_list_id' => $basis_of_transfer_list_id,
                'title' => 'нет',
                'description' => 'нет',
                'is_secured' => true,
            ],
            [
                'id' => Str::Uuid()->toString(),
                'structure_list_id' => $seasonality_of_work_id,
                'title' => 'весь год',
                'description' => 'весь год',
                'is_secured' => true,
            ],
            [
                'id' => Str::Uuid()->toString(),
                'structure_list_id' => $seasonality_of_work_id,
                'title' => 'отопительный период',
                'description' => 'отопительный период',
                'is_secured' => true,
            ],
            [
                'id' => Str::Uuid()->toString(),
                'structure_list_id' => $seasonality_of_work_id,
                'title' => 'межотопительный период',
                'description' => 'межотопительный период',
                'is_secured' => true,
            ],
            [
                'id' => Str::Uuid()->toString(),
                'structure_list_id' => $number_of_pipelines_id,
                'title' => '2-хтрубная',
                'description' => '2-хтрубная',
                'is_secured' => true,
            ],
            [
                'id' => Str::Uuid()->toString(),
                'structure_list_id' => $number_of_pipelines_id,
                'title' => '3-хтрубная',
                'description' => '3-хтрубная',
                'is_secured' => true,
            ],
            [
                'id' => Str::Uuid()->toString(),
                'structure_list_id' => $number_of_pipelines_id,
                'title' => '4-хтрубная',
                'description' => '4-хтрубная',
                'is_secured' => true,
            ],
            [
                'id' => Str::Uuid()->toString(),
                'structure_list_id' => $number_of_pipelines_id,
                'title' => 'нет',
                'description' => 'нет',
                'is_secured' => true,
            ],
            [
                'id' => Str::Uuid()->toString(),
                'structure_list_id' => $type_of_gasket_id,
                'title' => 'воздушная',
                'description' => 'воздушная',
                'is_secured' => true,
            ],
            [
                'id' => Str::Uuid()->toString(),
                'structure_list_id' => $type_of_gasket_id,
                'title' => 'подземная в канале',
                'description' => 'подземная в канале',
                'is_secured' => true,
            ],
            [
                'id' => Str::Uuid()->toString(),
                'structure_list_id' => $type_of_gasket_id,
                'title' => 'подземная бесканальная',
                'description' => 'подземная бесканальная',
                'is_secured' => true,
            ],
            [
                'id' => Str::Uuid()->toString(),
                'structure_list_id' => $type_of_gasket_id,
                'title' => 'нет',
                'description' => 'нет',
                'is_secured' => true,
            ],
        ]);
    }
}
