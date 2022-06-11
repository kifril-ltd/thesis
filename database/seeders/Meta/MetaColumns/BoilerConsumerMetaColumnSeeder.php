<?php

namespace Database\Seeders\Meta\MetaColumns;

use App\Models\Meta\MetaObject\EntityCol\EntityCol;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoilerConsumerMetaColumnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $boilerConsumersMetaObjectId = MetaObject::where('name', 'meta_boiler_room_consumers')->first()->meta_object_id;
        $namePrefix = 'meta_boiler_room_consumer_';

        $boiler_room_attrs = [
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerConsumersMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'boiler_room_consumer_id')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerConsumersMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'title')->first()->meta_object_id,
                'data_type' => 'string',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerConsumersMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'owner_id')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerConsumersMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'created_by')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerConsumersMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'updated_by')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerConsumersMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'status_id')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerConsumersMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'heating')->first()->meta_object_id,
                'data_type' => 'double',
                'metric' => 'Гкал/час',
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerConsumersMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'hot_water_supply')->first()->meta_object_id,
                'data_type' => 'double',
                'metric' => 'Гкал/час',
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerConsumersMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'ventilation')->first()->meta_object_id,
                'data_type' => 'double',
                'metric' => 'Гкал/час',
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerConsumersMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'volume')->first()->meta_object_id,
                'data_type' => 'double',
                'metric' => 'м3',
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerConsumersMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'residents')->first()->meta_object_id,
                'data_type' => 'integer',
                'metric' => 'чел',
                'is_basic' => true,
                'is_required' => true,
            ],
        ];

        EntityCol::insert($boiler_room_attrs);
    }
}
