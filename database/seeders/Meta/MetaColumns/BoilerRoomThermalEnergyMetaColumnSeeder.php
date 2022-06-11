<?php

namespace Database\Seeders\Meta\MetaColumns;

use App\Models\Meta\MetaObject\EntityCol\EntityCol;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoilerRoomThermalEnergyMetaColumnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $boilerRoomThermalEnergyMetaObjectId = MetaObject::where('name', 'meta_boiler_room_thermal_energies')->first()->meta_object_id;
        $namePrefix = 'meta_boiler_room_thermal_energy_';

        $boiler_room_thermal_energy_attrs = [
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomThermalEnergyMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'boiler_room_thermal_energy_id')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomThermalEnergyMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'year')->first()->meta_object_id,
                'data_type' => 'integer',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomThermalEnergyMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'owner_id')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomThermalEnergyMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'created_by')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomThermalEnergyMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'updated_by')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomThermalEnergyMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'status_id')->first()->meta_object_id,
                'data_type' => 'uuid',
                'metric' => null,
                'is_basic' => true,
                'is_required' => true,
            ],
            [
                'entity_col_id' => Str::Uuid()->toString(),
                'meta_obj_dataset_id' => $boilerRoomThermalEnergyMetaObjectId,
                'meta_obj_id' => MetaObject::where('name', $namePrefix . 'volume_of_heat_energy_release')->first()->meta_object_id,
                'data_type' => 'double',
                'metric' => 'Гкал',
                'is_basic' => true,
                'is_required' => true,
            ],
        ];

        EntityCol::insert($boiler_room_thermal_energy_attrs);
    }
}
