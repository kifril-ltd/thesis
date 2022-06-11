<?php

namespace Database\Seeders\Meta\MetaColumns;

use App\Models\Meta\MetaObject\EntityCol\EntityCol;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoilerRoomExpenditureMetaColumnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $boilerRoomExpenditureMetaObjectId = MetaObject::where('name', 'meta_boiler_room_expenditures')->first()->meta_object_id;
        $namePrefix = 'meta_boiler_room_expenditure_';

        $boiler_room_expenditure_attrs = [
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomExpenditureMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'boiler_room_expenditure_id')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomExpenditureMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'year')->first()->meta_object_id,
                'data_type' => 'integer',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomExpenditureMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'purchase_of_gas')->first()->meta_object_id,
                'data_type' => 'double',
                'metric' => 'тыс. руб.',
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomExpenditureMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'purchase_of_electricity')->first()->meta_object_id,
                'data_type' => 'double',
                'metric' => 'тыс. руб.',
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomExpenditureMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'total')->first()->meta_object_id,
                'data_type' => 'double',
                'metric' => 'тыс. руб.',
                'is_basic' => true,
                'is_required' => true,
            ],
        ];

        EntityCol::insert($boiler_room_expenditure_attrs);
    }
}
