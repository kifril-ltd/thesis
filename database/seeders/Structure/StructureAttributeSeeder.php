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
use App\Models\Structure\StructureAttribute\StructureAttribute;
use App\Models\Structure\StructureList\StructureList;
use App\Models\Structure\StructureList\StructureListValue\StructureListValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StructureAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StructureAttribute::truncate();

        $boiler_room_structure_id = Structure::where('title', BoilerRoom::class)->first()->structure_id;

        $basis_of_transfer_list_id = StructureList::where('caption', 'Основание передачи котельной, тепловой сети в эксплуатирующую организации')->first()->structure_list_id;

        $seasonality_of_work_id = StructureList::where('caption', 'Сезонность работы котельной')->first()->structure_list_id;

        $boiler_room_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'title',
                'caption' => 'Название котельной',
                'description' => 'Название котельной',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'municipality',
                'caption' => 'Муниципалитет',
                'description' => 'Муниципалитет',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'temperature',
                'caption' => 'Температурный график работы котельной',
                'description' => 'Температурный график работы котельной',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'mode',
                'caption' => 'Режим работы котельной',
                'description' => 'Режим работы котельной',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'year_of_construction',
                'caption' => 'Год постройки',
                'description' => 'Режим работы котельной',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'installed_capacity',
                'caption' => 'Установленная мощность котельной',
                'description' => 'Установленная мощность котельной, Гкал/час',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'available_capacity',
                'caption' => 'Располагаемая мощность котельной',
                'description' => 'Располагаемая мощность котельной, Гкал/час',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'number_chimneys',
                'caption' => 'Количество дымовых труб',
                'description' => 'Количество дымовых труб',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'connected_homes',
                'caption' => 'Количество подключенных жилых домов',
                'description' => 'Количество подключенных жилых домов',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'connected_budgets',
                'caption' => 'Количество подключенных объектов социальной и бюджетной сферы',
                'description' => 'Количество подключенных объектов социальной и бюджетной сферы',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'connected_others',
                'caption' => 'Количество подключенных прочих потребителей',
                'description' => 'Количество подключенных прочих потребителей',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'gas_consumption_device',
                'caption' => 'Тип (марка) прибора учета потребляемого газа',
                'description' => 'Тип (марка) прибора учета потребляемого газа',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'thermal_energy_consumption_device',
                'caption' => 'Тип (марка) прибора учета отпускаемой тепловой энергии',
                'description' => 'Тип (марка) прибора учета отпускаемой тепловой энергии',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'electricity_consumption_device',
                'caption' => 'Тип (марка) прибора учета потребляемой электроэнергии',
                'description' => 'Тип (марка) прибора учета потребляемой электроэнергии',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'cold_water_consumption_device',
                'caption' => 'Тип (марка) прибора учета потребляемой холодной воды',
                'description' => 'Тип (марка) прибора учета потребляемой холодной воды',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'power_inputs',
                'caption' => 'Количество вводов электроэнергии',
                'description' => 'Количество вводов электроэнергии',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'has_autonomous_power_supply_source',
                'caption' => 'Наличие автономного источника электроснабжения',
                'description' => 'Наличие автономного источника электроснабжения',
                'data_type' => 'boolean',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'has_equipment_for_power_supply',
                'caption' => 'Наличие оборудования для подключения передвижного автономного источника питания',
                'description' => 'Наличие оборудования для подключения передвижного автономного источника питания',
                'data_type' => 'boolean',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'installed_electrical_capacity',
                'caption' => 'Установленная электрическая мощность котельной',
                'description' => 'Установленная электрическая мощность котельной, кВт',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'building_renovation_year',
                'caption' => 'Год последнего капитального ремонта здания',
                'description' => 'Год последнего капитального ремонта здания',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'basis_of_transfer_id',
                'caption' => 'Основание передачи котельной, тепловой сети в эксплуатирующую организации',
                'description' => 'Основание передачи котельной, тепловой сети в эксплуатирующую организации (аренда/ тех.обслуживания/концессия)',
                'data_type' => 'list',
                'structure_list_id' => $basis_of_transfer_list_id,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'address_id',
                'caption' => 'Адрес котельной',
                'description' => 'Адрес котельной (наименование населенного пункта, улица, строение)',
                'data_type' => 'address',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'seasonality_of_work_id',
                'caption' => 'Сезонность работы котельной',
                'description' => 'Сезонность работы котельной',
                'data_type' => 'list',
                'structure_list_id' => $seasonality_of_work_id,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'operating_organization_id',
                'caption' => 'Наименование эксплуатирующей организации',
                'description' => 'Наименование эксплуатирующей организации',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'summ_hot_water_supply_for_homes',
                'caption' => 'Суммарная подключенная нагрузка на ГВС для жилых домов',
                'description' => 'Суммарная подключенная нагрузка на ГВС для жилых домов , Гкал/час',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'summ_hot_water_supply_for_social',
                'caption' => 'Суммарная подключенная нагрузка на ГВС для объектов социальной и бюджетной сферы',
                'description' => 'Суммарная подключенная нагрузка на ГВС для объектов социальной и бюджетной сферы, Гкал/час',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_structure_id,
            ],

        ];

        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'boiler_room_id',
            'caption' => 'Идентификатор котельной',
            'description' => 'Идентификатор котельной',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => Structure::where('title', BoilerRoom::class)->first()->structure_id,
        ]);
        StructureAttribute::insert($boiler_room_attrs);

        $boiler_room_consumers_consumers_id = Structure::where('title', BoilerRoomConsumer::class)->first()->structure_id;

        $boiler_room_consumers_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'title',
                'caption' => 'Название потребителя котельной',
                'description' => 'Название потребителя котельной',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_consumers_consumers_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_consumers_consumers_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_consumers_consumers_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_consumers_consumers_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => $boiler_room_consumers_consumers_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'heating',
                'caption' => 'Нагрузка на отопление',
                'description' => 'Нагрузка на отопление, Гкал/час',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_consumers_consumers_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'hot_water_supply',
                'caption' => 'Нагрузка на ГВС',
                'description' => 'Нагрузка на ГВС, Гкал/час',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_consumers_consumers_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'ventilation',
                'caption' => 'Нагрузка на вентиляцию',
                'description' => 'Нагрузка на вентиляцию, Гкал/час',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_consumers_consumers_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'volume',
                'caption' => 'Отапливаемый объем',
                'description' => 'Отапливаемый объем, м3',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_consumers_consumers_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'residents',
                'caption' => 'Количество проживающих жителей / пользователей ГВС',
                'description' => 'Количество проживающих жителей / пользователей ГВС, чел',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_consumers_consumers_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'boiler_room_consumer_id',
            'caption' => 'Идентификатор потребителя котельной',
            'description' => 'Идентификатор потребителя котельной',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => Structure::where('title', BoilerRoomConsumer::class)->first()->structure_id,
        ]);
        StructureAttribute::insert($boiler_room_consumers_attrs);

        $boiler_room_boiler_structure_id = Structure::where('title', BoilerRoomBoiler::class)->first()->structure_id;

        $boiler_room_boilers_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'stamp',
                'caption' => 'Марка',
                'description' => 'Марка',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_boiler_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_boiler_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_boiler_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносившего изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_boiler_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => $boiler_room_boiler_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'installed_capacity',
                'caption' => 'Установленная мощность котла',
                'description' => 'Установленная мощность котла, Гкал/час',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_boiler_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'available_power',
                'caption' => 'Располагаемая мощность котла',
                'description' => 'Располагаемая мощность котла, Гкал/час',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_boiler_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'operation_year',
                'caption' => 'Год ввода котла в эксплуатацию',
                'description' => 'Год ввода котла в эксплуатацию',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_boiler_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'type_of_backup_fuel',
                'caption' => 'Вид используемого резервного топлива',
                'description' => 'Вид используемого резервного топлива',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_boiler_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'building_renovation_year',
                'caption' => 'Год последнего капитального ремонта здания',
                'description' => 'Год последнего капитального ремонта здания',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_boiler_structure_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'boiler_room_boiler_id',
            'caption' => 'Идентификатор котла',
            'description' => 'Идентификатор котла',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => Structure::where('title', BoilerRoomBoiler::class)->first()->structure_id,
        ]);
        StructureAttribute::insert($boiler_room_boilers_attrs);

        $boiler_room_pumps_structure_id = Structure::where('title', BoilerRoomPump::class)->first()->structure_id;

        $boiler_room_pumps_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'stamp',
                'caption' => 'Марка',
                'description' => 'Марка',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_pumps_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_pumps_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_pumps_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_pumps_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => $boiler_room_pumps_structure_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'boiler_room_pump_id',
            'caption' => 'Идентификатор насоса в котельной',
            'description' => 'Идентификатор насоса в котельной',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => $boiler_room_pumps_structure_id,
        ]);
        StructureAttribute::insert($boiler_room_pumps_attrs);

        $boiler_room_equipment_structure_id = Structure::where('title', BoilerRoomEquipment::class)->first()->structure_id;

        $boiler_room_equipment_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'stamp',
                'caption' => 'Марка',
                'description' => 'Марка',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_equipment_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'year',
                'caption' => 'Год выпуска',
                'description' => 'Год выпуска',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_equipment_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_equipment_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_equipment_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_equipment_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => $boiler_room_equipment_structure_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'boiler_room_equipment_id',
            'caption' => 'Идентификатор оборудования котельной',
            'description' => 'Идентификатор оборудования котельной',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => $boiler_room_equipment_structure_id,
        ]);
        StructureAttribute::insert($boiler_room_equipment_attrs);

        $boiler_room_chimneys_structure_id = Structure::where('title', BoilerRoomChimney::class)->first()->structure_id;

        $boiler_room_chimneys_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'designation',
                'caption' => 'Обозначение',
                'description' => 'Обозначение',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_chimneys_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'year_of_construction',
                'caption' => 'Год постройки',
                'description' => 'Год постройки',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_chimneys_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_chimneys_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_chimneys_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_chimneys_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => $boiler_room_chimneys_structure_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'boiler_room_chimney_id',
            'caption' => 'Идентификатор дымовой трубы',
            'description' => 'Идентификатор дымовой трубы',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => $boiler_room_chimneys_structure_id,
        ]);
        StructureAttribute::insert($boiler_room_chimneys_attrs);

        $boiler_room_thermal_energies_structure_id = Structure::where('title', BoilerRoomThermalEnergy::class)->first()->structure_id;

        $boiler_room_thermal_energies_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'year',
                'caption' => 'Год',
                'description' => 'Год ',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_thermal_energies_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'volume',
                'caption' => 'Объем отдачи',
                'description' => 'Объем отдачи ',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_thermal_energies_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_thermal_energies_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_thermal_energies_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_thermal_energies_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => $boiler_room_thermal_energies_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'volume_of_heat_energy_release',
                'caption' => 'Годовой объем отпуска тепловой энергии потребителям',
                'description' => 'Годовой объем отпуска тепловой энергии потребителям, Гкал',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_thermal_energies_structure_id,
            ],

        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'boiler_room_thermal_energy_id',
            'caption' => 'Идентификатор тепловой отдачи котельной',
            'description' => 'Идентификатор тепловой отдачи котельной',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => $boiler_room_thermal_energies_structure_id,
        ]);
        StructureAttribute::insert($boiler_room_thermal_energies_attrs);

        $boiler_room_expenditures_structure_id = Structure::where('title', BoilerRoomExpenditure::class)->first()->structure_id;

        $boiler_room_expenditures_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'year',
                'caption' => 'Год',
                'description' => 'Год ',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_expenditures_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'gas_volume',
                'caption' => 'Объем газа',
                'description' => 'Объем газа',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_expenditures_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_expenditures_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_expenditures_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_expenditures_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => $boiler_room_expenditures_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'purchase_of_gas',
                'caption' => 'Затраты на покупку газа',
                'description' => 'Затраты на покупку газа, тыс. руб.',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_expenditures_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'purchase_of_electricity',
                'caption' => 'Затраты на покупку электроэнергии',
                'description' => 'Затраты на покупку электроэнергии, тыс. руб.',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_expenditures_structure_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'boiler_room_expenditure_id',
            'caption' => 'Идентификатор расхода котельной',
            'description' => 'Идентификатор расхода котельной',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => $boiler_room_expenditures_structure_id,
        ]);
        StructureAttribute::insert($boiler_room_expenditures_attrs);

        $boiler_room_repairs_structure_id = Structure::where('title', BoilerRoomRepair::class)->first()->structure_id;

        $boiler_room_repairs_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'type',
                'caption' => 'Тип ремонта',
                'description' => 'Тип ремонта',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_repairs_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'date',
                'caption' => 'Дата ремонта',
                'description' => 'Дата ремонта',
                'data_type' => 'timestamp',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_repairs_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'expenditures',
                'caption' => 'Расходы',
                'description' => 'Расходы',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_repairs_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_repairs_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_repairs_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_repairs_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => $boiler_room_repairs_structure_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'boiler_room_repair_id',
            'caption' => 'Идентификатор ремонта котельной',
            'description' => 'Идентификатор ремонта котельной',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => $boiler_room_repairs_structure_id,
        ]);
        StructureAttribute::insert($boiler_room_repairs_attrs);

        $boiler_room_accidents_structure_id = Structure::where('title', BoilerRoomAccident::class)->first()->structure_id;

        $boiler_room_accidents_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'detection_date',
                'caption' => 'Дата обнаружения',
                'description' => 'Дата обнаружения',
                'data_type' => 'timestamp',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_accidents_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'elimination_date',
                'caption' => 'Дата устранения',
                'description' => 'Дата устранения',
                'data_type' => 'timestamp',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_accidents_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'mode',
                'caption' => 'Режим в момент аварии',
                'description' => 'Режим в момент аварии',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_accidents_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_accidents_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_accidents_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_accidents_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => $boiler_room_accidents_structure_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'boiler_room_accident_id',
            'caption' => 'Идентификатор аварии на котельной',
            'description' => 'Идентификатор аварии на котельной',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => $boiler_room_accidents_structure_id,
        ]);
        StructureAttribute::insert($boiler_room_accidents_attrs);

        $boiler_room_heating_networks_structure_id = Structure::where('title', BoilerRoomHeatingNetwork::class)->first()->structure_id;

        $number_of_pipelines_id = StructureList::where('caption', 'Количество трубопроводов')->first()->structure_list_id;

        $type_of_gasket_id = StructureList::where('caption', 'Тип прокладки')->first()->structure_list_id;

        $boiler_room_heating_networks_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'operation_year',
                'caption' => 'Год ввода в эксплуатацию',
                'description' => 'Год ввода в эксплуатацию',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_heating_networks_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_heating_networks_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_heating_networks_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_heating_networks_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => $boiler_room_heating_networks_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'pipeline_diameter',
                'caption' => 'Средний диаметр трубопровода',
                'description' => 'Средний диаметр трубопровода, мм',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_heating_networks_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'length_of_heating_main',
                'caption' => 'Протяженность теплотрассы',
                'description' => 'Протяженность теплотрассы, м',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => $boiler_room_heating_networks_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'number_of_pipelines_id',
                'caption' => 'Количество трубопроводов',
                'description' => 'Количество трубопроводов',
                'data_type' => 'list',
                'structure_list_id' => $number_of_pipelines_id,
                'structure_id' => $boiler_room_heating_networks_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'type_of_gasket_id',
                'caption' => 'Тип прокладки',
                'description' => 'Тип прокладки',
                'data_type' => 'list',
                'structure_list_id' => $type_of_gasket_id,
                'structure_id' => $boiler_room_heating_networks_structure_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'boiler_room_heating_network_id',
            'caption' => 'Идентификатор участка теплосети',
            'description' => 'Идентификатор участка теплосети',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => $boiler_room_heating_networks_structure_id,
        ]);
        StructureAttribute::insert($boiler_room_heating_networks_attrs);

        $heating_network_accidents_structure_id = Structure::where('title', HeatingNetworkAccident::class)->first()->structure_id;

        $heating_network_accidents_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'detection_date',
                'caption' => 'Дата обнаружения',
                'description' => 'Дата обнаружения',
                'data_type' => 'timestamp',
                'structure_list_id' => null,
                'structure_id' => $heating_network_accidents_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'elimination_date',
                'caption' => 'Дата устранения',
                'description' => 'Дата устранения',
                'data_type' => 'timestamp',
                'structure_list_id' => null,
                'structure_id' => $heating_network_accidents_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'mode',
                'caption' => 'Режим в момент аварии',
                'description' => 'Режим в момент аварии',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => $heating_network_accidents_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $heating_network_accidents_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $heating_network_accidents_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => $heating_network_accidents_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => $heating_network_accidents_structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'number_of_gusts',
                'caption' => 'Количество порывов за последние 5 лет',
                'description' => 'Количество порывов за последние 5 лет',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => $heating_network_accidents_structure_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'heating_network_accident_id',
            'caption' => 'Идентификатор аварии',
            'description' => 'Идентификатор аварии на участке теплосети',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => $heating_network_accidents_structure_id,
        ]);
        StructureAttribute::insert($heating_network_accidents_attrs);

        $heating_network_repairs_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'type',
                'caption' => 'Тип ремонта',
                'description' => 'Тип ремонта',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', HeatingNetworkRepair::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'date',
                'caption' => 'Дата ремонта',
                'description' => 'Дата ремонта',
                'data_type' => 'timestamp',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', HeatingNetworkRepair::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'expenditures',
                'caption' => 'Расходы',
                'description' => 'Расходы',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', HeatingNetworkRepair::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', HeatingNetworkRepair::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', HeatingNetworkRepair::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', HeatingNetworkRepair::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => Structure::where('title', HeatingNetworkRepair::class)->first()->structure_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'heating_network_repair_id',
            'caption' => 'Идентификатор ремонта',
            'description' => 'Идентификатор ремонта теплосети',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => Structure::where('title', HeatingNetworkRepair::class)->first()->structure_id,
        ]);
        StructureAttribute::insert($heating_network_repairs_attrs);

        $heating_network_expenditures_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'year',
                'caption' => 'Год',
                'description' => 'Год ',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', HeatingNetworkExpenditure::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', HeatingNetworkExpenditure::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', HeatingNetworkExpenditure::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', HeatingNetworkExpenditure::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => Structure::where('title', HeatingNetworkExpenditure::class)->first()->structure_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'heating_network_expenditure_id',
            'caption' => 'Идентификатор расхода',
            'description' => 'Идентификатор расхода теплосети',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => Structure::where('title', HeatingNetworkExpenditure::class)->first()->structure_id,
        ]);
        StructureAttribute::insert($heating_network_expenditures_attrs);

        $heating_network_thermal_chambers_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'designation',
                'caption' => 'Обозначение',
                'description' => 'Обозначение',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', HeatingNetworkThermalChamber::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', HeatingNetworkThermalChamber::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', HeatingNetworkThermalChamber::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', HeatingNetworkThermalChamber::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => Structure::where('title', HeatingNetworkThermalChamber::class)->first()->structure_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'heating_network_thermal_chamber_id',
            'caption' => 'Идентификатор тепловой камеры',
            'description' => 'Идентификатор тепловой камеры',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => Structure::where('title', HeatingNetworkThermalChamber::class)->first()->structure_id,
        ]);
        StructureAttribute::insert($heating_network_thermal_chambers_attrs);

        $thermal_chamber_shut_off_valves_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'title',
                'caption' => 'Название',
                'description' => 'Название',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', ThermalChamberShutOffValve::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'diameter',
                'caption' => 'Диаметр',
                'description' => 'Диаметр арматуры',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', ThermalChamberShutOffValve::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'quantity',
                'caption' => 'Количество',
                'description' => 'Количество арматуры',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', ThermalChamberShutOffValve::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', ThermalChamberShutOffValve::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', ThermalChamberShutOffValve::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', ThermalChamberShutOffValve::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => Structure::where('title', ThermalChamberShutOffValve::class)->first()->structure_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'thermal_chamber_shut_off_valve_id',
            'caption' => 'Идентификатор запорной арматуры',
            'description' => 'Идентификатор запорной арматуры',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => Structure::where('title', ThermalChamberShutOffValve::class)->first()->structure_id,
        ]);
        StructureAttribute::insert($thermal_chamber_shut_off_valves_attrs);

        $thermal_chamber_reset_devices_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'title',
                'caption' => 'Название',
                'description' => 'Название',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', ThermalChamberResetDevice::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'diameter',
                'caption' => 'Диаметр',
                'description' => 'Диаметр сбросного устройства',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', ThermalChamberResetDevice::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'quantity',
                'caption' => 'Количество',
                'description' => 'Количество сбросных устройств',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', ThermalChamberResetDevice::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', ThermalChamberResetDevice::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', ThermalChamberResetDevice::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', ThermalChamberResetDevice::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => Structure::where('title', ThermalChamberResetDevice::class)->first()->structure_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'thermal_chamber_reset_device_id',
            'caption' => 'Идентификатор сбросного устройства',
            'description' => 'Идентификатор сбросного устройства',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_list_id' => null,
            'structure_id' => Structure::where('title', ThermalChamberResetDevice::class)->first()->structure_id,
        ]);
        StructureAttribute::insert($thermal_chamber_reset_devices_attrs);

        $boiler_room_pumping_stations_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'title',
                'caption' => 'Название',
                'description' => 'Название насосной',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', BoilerRoomPumpingStation::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', BoilerRoomPumpingStation::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', BoilerRoomPumpingStation::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', BoilerRoomPumpingStation::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => Structure::where('title', BoilerRoomPumpingStation::class)->first()->structure_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'boiler_room_pumping_station_id',
            'caption' => 'Идентификатор насосной',
            'description' => 'Идентификатор насосной',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_list_id' => null,
            'structure_id' => Structure::where('title', BoilerRoomPumpingStation::class)->first()->structure_id,
        ]);
        StructureAttribute::insert($boiler_room_pumping_stations_attrs);

        $pumping_station_pumps_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'stamp',
                'caption' => 'Марка',
                'description' => 'Марка насоса',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationPump::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'boiler_room_pumping_station_id',
                'caption' => 'Идентификатор насосной',
                'description' => 'Идентификатор насосной',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationPump::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationPump::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationPump::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationPump::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => Structure::where('title', PumpingStationPump::class)->first()->structure_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'pumping_station_pump_id',
            'caption' => 'Идентификатор насоса',
            'description' => 'Идентификатор насоса',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => Structure::where('title', PumpingStationPump::class)->first()->structure_id,
        ]);
        StructureAttribute::insert($pumping_station_pumps_attrs);

        $pumping_station_heat_exchangers_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'stamp',
                'caption' => 'Марка',
                'description' => 'Марка',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationHeatExchanger::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'year',
                'caption' => 'Год выпуска',
                'description' => 'Год выпуска',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationHeatExchanger::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationHeatExchanger::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationHeatExchanger::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationHeatExchanger::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => Structure::where('title', PumpingStationHeatExchanger::class)->first()->structure_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'pumping_station_heat_exchanger_id',
            'caption' => 'Идентификатор теплообменника',
            'description' => 'Идентификатор теплообменника',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => Structure::where('title', PumpingStationHeatExchanger::class)->first()->structure_id,
        ]);
        StructureAttribute::insert($pumping_station_heat_exchangers_attrs);

        $pumping_station_accidents_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'detection_date',
                'caption' => 'Дата обнаружения',
                'description' => 'Дата обнаружения',
                'data_type' => 'timestamp',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationAccident::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'elimination_date',
                'caption' => 'Дата устранения',
                'description' => 'Дата устранения',
                'data_type' => 'timestamp',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationAccident::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'mode',
                'caption' => 'Режим в момент аварии',
                'description' => 'Режим в момент аварии',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationAccident::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationAccident::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationAccident::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationAccident::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => Structure::where('title', PumpingStationAccident::class)->first()->structure_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'pumping_station_accident_id',
            'caption' => 'Идентификатор аварии',
            'description' => 'Идентификатор аварии на насосной',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => Structure::where('title', PumpingStationAccident::class)->first()->structure_id,
        ]);
        StructureAttribute::insert($pumping_station_accidents_attrs);

        $pumping_station_repairs_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'type',
                'caption' => 'Тип ремонта',
                'description' => 'Тип ремонта',
                'data_type' => 'string',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationRepair::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'date',
                'caption' => 'Дата ремонта',
                'description' => 'Дата ремонта',
                'data_type' => 'timestamp',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationRepair::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'expenditures',
                'caption' => 'Расходы',
                'description' => 'Расходы',
                'data_type' => 'double',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationRepair::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationRepair::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationRepair::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationRepair::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => Structure::where('title', PumpingStationRepair::class)->first()->structure_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'pumping_station_repair_id',
            'caption' => 'Идентификатор ремонта',
            'description' => 'Идентификатор ремонта насосной',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => Structure::where('title', PumpingStationRepair::class)->first()->structure_id,
        ]);
        StructureAttribute::insert($pumping_station_repairs_attrs);

        $pumping_station_expenditures_attrs = [
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'year',
                'caption' => 'Год',
                'description' => 'Год ',
                'data_type' => 'integer',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationExpenditure::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'description' => 'Владелец аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationExpenditure::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'description' => 'Создатель аттрибута',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationExpenditure::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'description' => 'Пользователь, вносивший изменения',
                'data_type' => 'user',
                'structure_list_id' => null,
                'structure_id' => Structure::where('title', PumpingStationExpenditure::class)->first()->structure_id,
            ],
            [
                'structure_attribute_id' => Str::Uuid()->toString(),
                'title' => 'status_id',
                'caption' => 'Статус записи',
                'description' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
                'data_type' => 'list',
                'structure_list_id' => $_ENV['STATUS_OBJECT_LIST_ID'],
                'structure_id' => Structure::where('title', PumpingStationExpenditure::class)->first()->structure_id,
            ],
        ];
        StructureAttribute::insert([
            'structure_attribute_id' => Str::Uuid()->toString(),
            'title' => 'pumping_station_expenditure_id',
            'caption' => 'Идентификатор расхода',
            'description' => 'Идентификатор расхода насосной',
            'is_pk' => true,
            'data_type' => 'string',
            'structure_id' => Structure::where('title', PumpingStationExpenditure::class)->first()->structure_id,
        ]);
        StructureAttribute::insert($pumping_station_expenditures_attrs);
    }
}
