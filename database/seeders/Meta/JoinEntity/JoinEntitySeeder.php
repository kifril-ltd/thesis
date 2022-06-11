<?php

namespace Database\Seeders\Meta\JoinEntity;


use App\Models\Meta\MetaObject\JoinEntity\JoinEntity;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class JoinEntitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $joins = [
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'boiler_room_consumer_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'boiler_room_consumers')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'boiler_room_consumer_' . 'boiler_room_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'boiler_rooms')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'boiler_room_boiler_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'boiler_room_boilers')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'boiler_room_boiler_' . 'boiler_room_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'boiler_rooms')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'boiler_room_pump_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'boiler_room_pumps')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'boiler_room_pump_' . 'boiler_room_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'boiler_rooms')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'boiler_room_equipment_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'boiler_room_equipments')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'boiler_room_equipment_' . 'boiler_room_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'boiler_rooms')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'boiler_room_chimney_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'boiler_room_chimneys')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'boiler_room_chimney_' . 'boiler_room_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'boiler_rooms')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'boiler_room_thermal_energy_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'boiler_room_thermal_energies')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'boiler_room_thermal_energy_' . 'boiler_room_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'boiler_rooms')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'boiler_room_heating_network_expenditure_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'heating_network_expenditures')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'boiler_room_heating_network_expenditure_' . 'boiler_room_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'boiler_rooms')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'boiler_room_expenditure_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'boiler_room_expenditures')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'boiler_room_expenditure_' . 'boiler_room_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'boiler_rooms')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'boiler_room_repair_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'boiler_room_repairs')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'boiler_room_repair_' . 'boiler_room_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'boiler_rooms')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'boiler_room_accident_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'boiler_room_accidents')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'boiler_room_accident_' . 'boiler_room_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'boiler_rooms')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'boiler_room_heating_network_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'boiler_room_heating_networks')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'heating_network_' . 'boiler_room_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'boiler_rooms')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'boiler_room_pumping_station_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'boiler_room_pumping_stations')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'pumping_station_' . 'boiler_room_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'boiler_rooms')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'heating_network_accident_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'heating_network_accidents')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'heating_network_accident_' . 'boiler_room_heating_network_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'boiler_room_heating_networks')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'heating_network_repair_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'heating_network_repairs')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'heating_network_repair_' . 'boiler_room_heating_network_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'boiler_room_heating_networks')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'heating_network_thermal_chamber_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'heating_network_thermal_chambers')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'heating_network_thermal_chamber_' . 'boiler_room_heating_network_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'boiler_room_heating_networks')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'pumping_station_pump_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'pumping_station_pumps')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'pumping_station_pump_' . 'boiler_room_pumping_station_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'boiler_room_pumping_stations')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'pumping_station_heat_exchanger_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'pumping_station_heat_exchangers')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'pumping_station_heat_exchanger_' . 'boiler_room_pumping_station_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'boiler_room_pumping_stations')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'pumping_station_accident_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'pumping_station_accidents')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'pumping_station_accident_' . 'boiler_room_pumping_station_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'boiler_room_pumping_stations')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'pumping_station_repair_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'pumping_station_repairs')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'pumping_station_repair_' . 'boiler_room_pumping_station_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'boiler_room_pumping_stations')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'pumping_station_expenditure_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'pumping_station_expenditures')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'pumping_station_expenditure_' . 'boiler_room_pumping_station_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'boiler_room_pumping_stations')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'thermal_chamber_shut_off_valve_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'thermal_chamber_shut_off_valves')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'thermal_chamber_shut_off_valve_' . 'heating_network_thermal_chamber_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'heating_network_thermal_chambers')->first()->meta_object_id,
            ],
            [
                'join_entity_id' => Str::Uuid()->toString(),
                'meta_obj_id' => MetaObject::where('name', 'meta_' . 'thermal_chamber_reset_device_' . 'join')->first()->meta_object_id,
                'source_id' => MetaObject::where('name', 'meta_' . 'thermal_chamber_reset_devices')->first()->meta_object_id,
                'source_col_id' => MetaObject::where('name', 'meta_' . 'thermal_chamber_reset_device_' . 'heating_network_thermal_chamber_id')->first()->meta_object_id,
                'target_id' => MetaObject::where('name', 'meta_' . 'heating_network_thermal_chambers')->first()->meta_object_id,
            ],
        ];
        JoinEntity::insert($joins);
    }
}
