<?php

namespace Database\Seeders\Structure;

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
use App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationAccident\PumpingStationAccident;
use App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationExpenditure\PumpingStationExpenditure;
use App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationHeatExchanger\PumpingStationHeatExchanger;
use App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationPump\PumpingStationPump;
use App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationRepair\PumpingStationRepair;
use App\Models\BoilerRoom\BoilerRoomRepair\BoilerRoomRepair;
use App\Models\BoilerRoom\BoilerRoomThermalEnergy\BoilerRoomThermalEnergy;
use App\Models\Structure\Structure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Structure::truncate();

        $boilers_rooms_metadata = [
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => BoilerRoom::class,
                'caption' => 'Котельные',
                'description' => 'Таблица с котельными',
                'structure_parent_id' => null
            ],
        ];
        Structure::insert($boilers_rooms_metadata);

        $boilers_rooms_child_metadata = [
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => BoilerRoomConsumer::class,
                'caption' => 'Потребители',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', BoilerRoom::class)->first()->structure_id
            ],
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => BoilerRoomBoiler::class,
                'caption' => 'Котлы',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', BoilerRoom::class)->first()->structure_id
            ],
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => BoilerRoomPump::class,
                'caption' => 'Насосы котельных',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', BoilerRoom::class)->first()->structure_id
            ],
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => BoilerRoomEquipment::class,
                'caption' => 'Теплообменное оборудование котельных',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', BoilerRoom::class)->first()->structure_id
            ],
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => BoilerRoomChimney::class,
                'caption' => 'Дымовые трубы',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', BoilerRoom::class)->first()->structure_id
            ],
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => BoilerRoomThermalEnergy::class,
                'caption' => 'Объем отпуска тепловой энергии котельных',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', BoilerRoom::class)->first()->structure_id
            ],
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => BoilerRoomExpenditure::class,
                'caption' => 'Затраты на котельные',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', BoilerRoom::class)->first()->structure_id
            ],
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => BoilerRoomRepair::class,
                'caption' => 'Ремонты котельных',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', BoilerRoom::class)->first()->structure_id
            ],
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => BoilerRoomAccident::class,
                'caption' => 'Аварии на котельных',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', BoilerRoom::class)->first()->structure_id
            ],
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => BoilerRoomHeatingNetwork::class,
                'caption' => 'Участок теплосети',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', BoilerRoom::class)->first()->structure_id
            ],
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => BoilerRoomPumpingStation::class,
                'caption' => 'Насосные',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', BoilerRoom::class)->first()->structure_id
            ],
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => HeatingNetworkExpenditure::class,
                'caption' => 'Расходы теплосетей',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', BoilerRoom::class)->first()->structure_id
            ],
        ];
        Structure::insert($boilers_rooms_child_metadata);

        $heating_networks_child_metadata = [
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => HeatingNetworkAccident::class,
                'caption' => 'Аварии на теплосетях',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', BoilerRoomHeatingNetwork::class)->first()->structure_id
            ],
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => HeatingNetworkRepair::class,
                'caption' => 'Ремонты теплосетей',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', BoilerRoomHeatingNetwork::class)->first()->structure_id
            ],
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => HeatingNetworkThermalChamber::class,
                'caption' => 'Тепловые камеры',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', BoilerRoomHeatingNetwork::class)->first()->structure_id
            ],
        ];
        Structure::insert($heating_networks_child_metadata);

        $heating_chamber_child_metadata = [
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => ThermalChamberShutOffValve::class,
                'caption' => 'Запорная арматура тепловых камер',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', HeatingNetworkThermalChamber::class)->first()->structure_id
            ],
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => ThermalChamberResetDevice::class,
                'caption' => 'Сбросные устройства тепловых камер',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', HeatingNetworkThermalChamber::class)->first()->structure_id
            ],
        ];
        Structure::insert($heating_chamber_child_metadata);

        $pumping_stations_child_metadata = [
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => PumpingStationPump::class,
                'caption' => 'Насосы насосных станций',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', BoilerRoomPumpingStation::class)->first()->structure_id
            ],
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => PumpingStationHeatExchanger::class,
                'caption' => 'Теплообменники насосных станций',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', BoilerRoomPumpingStation::class)->first()->structure_id
            ],
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => PumpingStationAccident::class,
                'caption' => 'Аварии насосных станций',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', BoilerRoomPumpingStation::class)->first()->structure_id
            ],
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => PumpingStationRepair::class,
                'caption' => 'Ремонт насосных станций',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', BoilerRoomPumpingStation::class)->first()->structure_id
            ],
            [
                'structure_id' => Str::Uuid()->toString(),
                'title' => PumpingStationExpenditure::class,
                'caption' => 'Расходы насосных станций',
                'description' => 'Таблица с ',
                'structure_parent_id' => Structure::where('title', BoilerRoomPumpingStation::class)->first()->structure_id
            ],
        ];
        Structure::insert($pumping_stations_child_metadata);


    }
}
