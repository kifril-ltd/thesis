<?php

namespace Database\Seeders\Meta\MetaColumns;

use App\Models\Meta\MetaObject\EntityCol\EntityCol;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoilerRoomBoilerMetaColumnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $boilerRoomBoilersMetaObjectId = MetaObject::where('name', 'meta_boiler_room_boilers')->first()->meta_object_id;
        $namePrefix = 'meta_boiler_room_boiler_';

        $boiler_room_boiler_attrs = [
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomBoilersMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'boiler_room_boiler_id')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomBoilersMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'installed_capacity')->first()->meta_object_id,
                'data_type' => 'double',
                'metric' => 'Гкал/час',
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomBoilersMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'operation_year')->first()->meta_object_id,
                'data_type' => 'integer',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomBoilersMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'type_of_main_fuel')->first()->meta_object_id,
                'data_type' => 'string',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomBoilersMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'type_of_backup_fuel')->first()->meta_object_id,
                'data_type' => 'string',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomBoilersMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'building_renovation_year')->first()->meta_object_id,
                'data_type' => 'integer',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
        ];

        EntityCol::insert($boiler_room_boiler_attrs);
    }
}
