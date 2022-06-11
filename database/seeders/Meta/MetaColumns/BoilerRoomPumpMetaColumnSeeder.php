<?php

namespace Database\Seeders\Meta\MetaColumns;

use App\Models\Meta\MetaObject\EntityCol\EntityCol;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoilerRoomPumpMetaColumnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $boilerRoomPumpMetaObjectId = MetaObject::where('name', 'meta_boiler_room_pumps')->first()->meta_object_id;
        $namePrefix = 'meta_boiler_room_pump_';

        $boiler_room_pump_attrs = [
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomPumpMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'boiler_room_pump_id')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomPumpMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'stamp')->first()->meta_object_id,
                'data_type' => 'string',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomPumpMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'owner_id')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomPumpMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'created_by')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomPumpMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'updated_by')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomPumpMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'status_id')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
        ];

        EntityCol::insert($boiler_room_pump_attrs);
    }
}
