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

class MetaObjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thermalModuleId = MetaModule::where('name', 'thermal_power')->first()->meta_module_id;
        $objectKindId = MetaKind::where('name', 'object')->first()->meta_kind_id;

        $tables = [
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_rooms',
                'class_name' => BoilerRoom::class,
                'object' => 'boiler_rooms',
                'caption' => 'Котельные'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_consumers',
                'class_name' => BoilerRoomConsumer::class,
                'object' => 'boiler_room_consumers',
                'caption' => 'Потребители котельной'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_boilers',
                'class_name' => BoilerRoomBoiler::class,
                'object' => 'boiler_room_boilers',
                'caption' => 'Котлы котельной'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_pumps',
                'class_name' => BoilerRoomPump::class,
                'object' => 'boiler_room_pumps',
                'caption' => 'Насосы котельной'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_equipments',
                'class_name' => BoilerRoomEquipment::class,
                'object' => 'boiler_room_equipments',
                'caption' => 'Теплообменное оборудование'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_chimneys',
                'class_name' => BoilerRoomChimney::class,
                'object' => 'boiler_room_chimneys',
                'caption' => 'Дымовые трубы'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_thermal_energies',
                'class_name' => BoilerRoomThermalEnergy::class,
                'object' => 'boiler_room_thermal_energies',
                'caption' => 'Объем отпуска тепловой энергии'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_expenditures',
                'class_name' => BoilerRoomExpenditure::class,
                'object' => 'boiler_room_expenditures',
                'caption' => 'Затраты на котельную'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_repairs',
                'class_name' => BoilerRoomRepair::class,
                'object' => 'boiler_room_repairs',
                'caption' => 'Ремонты котельных'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_accidents',
                'class_name' => BoilerRoomAccident::class,
                'object' => 'boiler_room_accidents',
                'caption' => 'Аварии на котельных'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_pumping_stations',
                'class_name' => BoilerRoomPumpingStation::class,
                'object' => 'boiler_room_pumping_stations',
                'caption' => 'Насосные'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'boiler_room_heating_networks',
                'class_name' => BoilerRoomHeatingNetwork::class,
                'object' => 'boiler_room_heating_networks',
                'caption' => 'Участки теплосети'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'heating_network_accidents',
                'class_name' => HeatingNetworkAccident::class,
                'object' => 'heating_network_accidents',
                'caption' => 'Аварии на теплосети'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'heating_network_repairs',
                'class_name' => HeatingNetworkRepair::class,
                'object' => 'heating_network_repairs',
                'caption' => 'Ремонты теплосети'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'heating_network_expenditures',
                'class_name' => HeatingNetworkExpenditure::class,
                'object' => 'heating_network_expenditures',
                'caption' => 'Затраты на теплосеть'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'heating_network_thermal_chambers',
                'class_name' => HeatingNetworkThermalChamber::class,
                'object' => 'heating_network_thermal_chambers',
                'caption' => 'Тепловые камеры'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'thermal_chamber_shut_off_valves',
                'class_name' => ThermalChamberShutOffValve::class,
                'object' => 'thermal_chamber_shut_off_valves',
                'caption' => 'Запорная арматура'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'thermal_chamber_reset_devices',
                'class_name' => ThermalChamberResetDevice::class,
                'object' => 'thermal_chamber_reset_devices',
                'caption' => 'Сбросные устройства'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'pumping_station_pumps',
                'class_name' => PumpingStationPump::class,
                'object' => 'pumping_station_pumps',
                'caption' => 'Насосы ЦТП/Насосной'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'pumping_station_heat_exchangers',
                'class_name' => PumpingStationHeatExchanger::class,
                'object' => 'pumping_station_heat_exchangers',
                'caption' => 'Теплообменники ЦТП/Насосной'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'pumping_station_accidents',
                'class_name' => PumpingStationHeatExchanger::class,
                'object' => 'pumping_station_accidents',
                'caption' => 'Аварии в ЦТП/Насосной'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'pumping_station_repairs',
                'class_name' => PumpingStationRepair::class,
                'object' => 'pumping_station_repairs',
                'caption' => 'Ремонты ЦТП/Насосной'
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'meta_module_id' => $thermalModuleId,
                'meta_kind_id' => $objectKindId,
                'name' => 'meta_' . 'pumping_station_expenditures',
                'class_name' => PumpingStationRepair::class,
                'object' => 'pumping_station_expenditures',
                'caption' => 'Затраты на ЦТП/Насосной'
            ],
        ];
        MetaObject::insert($tables);
    }
}
