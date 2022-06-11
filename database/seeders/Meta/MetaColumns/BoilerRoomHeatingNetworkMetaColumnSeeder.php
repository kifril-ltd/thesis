<?php

namespace Database\Seeders\Meta\MetaColumns;

use App\Models\Meta\MetaObject\EntityCol\EntityCol;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoilerRoomHeatingNetworkMetaColumnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $boilerRoomHeatingNetworkMetaObjectId = MetaObject::where('name', 'meta_boiler_room_heating_networks')->first()->meta_object_id;
        $namePrefix = 'meta_heating_network_';

        $boiler_room_heating_network_attrs = [
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomHeatingNetworkMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'boiler_room_heating_network_id')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomHeatingNetworkMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'boiler_room_id')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomHeatingNetworkMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'operation_year')->first()->meta_object_id,
                'data_type' => 'integer',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomHeatingNetworkMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'pipeline_diameter')->first()->meta_object_id,
                'data_type' => 'double',
                'metric' => 'мм',
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomHeatingNetworkMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'length_of_heating_main')->first()->meta_object_id,
                'data_type' => 'double',
                'metric' => 'м',
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomHeatingNetworkMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'number_of_pipelines')->first()->meta_object_id,
                'data_type' => 'integer',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomHeatingNetworkMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'type_of_gasket')->first()->meta_object_id,
                'data_type' => 'string',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
        ];

        EntityCol::insert($boiler_room_heating_network_attrs);
    }
}
