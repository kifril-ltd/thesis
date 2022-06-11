<?php

namespace Database\Seeders\Meta\MetaObjects;

use App\Models\BoilerRoom\BoilerRoom;
use App\Models\BoilerRoom\BoilerRoomAccident\BoilerRoomAccident;
use App\Models\BoilerRoom\BoilerRoomBoiler\BoilerRoomBoiler;
use App\Models\BoilerRoom\BoilerRoomChimney\BoilerRoomChimney;
use App\Models\BoilerRoom\BoilerRoomConsumer\BoilerRoomConsumer;
use App\Models\BoilerRoom\BoilerRoomEquipment\BoilerRoomEquipment;
use App\Models\BoilerRoom\BoilerRoomExpenditure\BoilerRoomExpenditure;
use App\Models\BoilerRoom\BoilerRoomHeatingNetwork\BoilerRoomHeatingNetwork;
use App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkAccident\HeatingNetworkAccident;
use App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkExpenditure\HeatingNetworkExpenditure;
use App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkRepair\HeatingNetworkRepair;
use App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkThermalChamber\HeatingNetworkThermalChamber;
use App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkThermalChamber\ThermalChamberResetDevice\ThermalChamberResetDevice;
use App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkThermalChamber\ThermalChamberShutOffValve\ThermalChamberShutOffValve;
use App\Models\BoilerRoom\BoilerRoomPump\BoilerRoomPump;
use App\Models\BoilerRoom\BoilerRoomPumpingStation\BoilerRoomPumpingStation;
use App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationHeatExchanger\PumpingStationHeatExchanger;
use App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationPump\PumpingStationPump;
use App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationRepair\PumpingStationRepair;
use App\Models\BoilerRoom\BoilerRoomRepair\BoilerRoomRepair;
use App\Models\BoilerRoom\BoilerRoomThermalEnergy\BoilerRoomThermalEnergy;
use App\Models\Meta\MetaKind\MetaKind;
use App\Models\Meta\MetaModule\MetaModule;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MetaObjectJoinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thermalModuleId = MetaModule::where('name', 'thermal_power')->first()->meta_module_id;
        $objectKindId = MetaKind::where('name', 'join')->first()->meta_kind_id;

        $joins = [
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_consumer_' . 'join',
                'caption' => 'Котельная-потребитель'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_boiler_' . 'join',
                'caption' => 'Котельная - котел'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_pump_' . 'join',
                'caption' => 'Котельная - насос'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_equipment_' . 'join',
                'caption' => 'Котельная - теплообменное оборудование'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_chimney_' . 'join',
                'caption' => 'Котельная - дымовая труба'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_thermal_energy_' . 'join',
                'caption' => 'Котельная - отпуск тепловой энергии'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_expenditure_' . 'join',
                'caption' => 'Котельная - затраты на котельную'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_heating_network_expenditure_' . 'join',
                'caption' => 'Котельная - затраты на тепловую сеть'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_repair_' . 'join',
                'caption' => 'Котельная - ремонт'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_accident_' . 'join',
                'caption' => 'Котельная - авария'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_heating_network_' . 'join',
                'caption' => 'Котельная - участок тепловой сети'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_pumping_station_' . 'join',
                'caption' => 'Котельная - участок тепловой сети'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'heating_network_accident_' . 'join',
                'caption' => 'Участок тепловой сети - авария'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'heating_network_repair_' . 'join',
                'caption' => 'Участок тепловой сети - ремонт'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'heating_network_thermal_chamber_' . 'join',
                'caption' => 'Участок тепловой сети - тепловая камера'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'pumping_station_pump_' . 'join',
                'caption' => 'Насосная станция - насос'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'pumping_station_heat_exchanger_' . 'join',
                'caption' => 'Насосная станция - теплообменник'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'pumping_station_accident_' . 'join',
                'caption' => 'Насосная станция - авария'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'pumping_station_repair_' . 'join',
                'caption' => 'Насосная станция - ремонт'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'pumping_station_expenditure_' . 'join',
                'caption' => 'Насосная станция - затраты'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'thermal_chamber_shut_off_valve_' . 'join',
                'caption' => 'Насосная станция - запорная арматура'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'thermal_chamber_reset_device_' . 'join',
                'caption' => 'Насосная станция - сбросное устройство'
            ],
        ];
        MetaObject::insert($joins);
    }
}
