<?php

namespace Database\Seeders\Meta\MetaColumns;

use App\Models\Meta\MetaObject\EntityCol\EntityCol;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoilerMetaColumnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $boilerRoomMetaObjectId = MetaObject::where('name', 'meta_boiler_rooms')->first()->meta_object_id;
        $namePrefix = 'meta_boiler_room_';

        $boiler_room_attrs = [
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'boiler_room_id')->first()->meta_object_id,
                'data_type' => 'string',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'title')->first()->meta_object_id,
                'data_type' => 'string',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'municipality')->first()->meta_object_id,
                'data_type' => 'string',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'installed_capacity')->first()->meta_object_id,
                'data_type' => 'double',
                'metric' => 'Гкал/час',
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'connected_homes')->first()->meta_object_id,
                'data_type' => 'integer',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'connected_budgets')->first()->meta_object_id,
                'data_type' => 'integer',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'address')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'seasonality_of_work')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'operating_organization')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'summ_hot_water_supply_for_homes')->first()->meta_object_id,
                'data_type' => 'double',
                'metric' => 'Гкал/час',
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'summ_hot_water_supply_for_social')->first()->meta_object_id,
                'data_type' => 'double',
                'metric' => 'Гкал/час',
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'name_of_the_owner')->first()->meta_object_id,
                'data_type' => 'string',
                'metric' => '',
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'summ_heating_supply_for_homes')->first()->meta_object_id,
                'data_type' => 'double',
                'metric' => 'Гкал/час',
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'summ_heating_supply_for_social')->first()->meta_object_id,
                'data_type' => 'double',
                'metric' => 'Гкал/час',
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'connected_others')->first()->meta_object_id,
                'data_type' => 'integer',
                'metric' => '',
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'summ_heating_supply_others')->first()->meta_object_id,
                'data_type' => 'double',
                'metric' => 'Гкал/час',
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'summ_hot_water_supply_others')->first()->meta_object_id,
                'data_type' => 'double',
                'metric' => 'Гкал/час',
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'mode')->first()->meta_object_id,
                'data_type' => 'string',
                'metric' => '',
                'is_basic' => true,
                'is_required' => true,
            ],
        ];

        EntityCol::insert($boiler_room_attrs);
    }
}
