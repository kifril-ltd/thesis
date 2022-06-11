<?php

namespace Database\Seeders\Meta\MetaObjects\MetaObjectColumn;

use App\Models\BoilerRoom\BoilerRoomConsumer\BoilerRoomConsumer;
use App\Models\BoilerRoom\BoilerRoomExpenditure\BoilerRoomExpenditure;
use App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationExpenditure\PumpingStationExpenditure;
use App\Models\Meta\MetaKind\MetaKind;
use App\Models\Meta\MetaModule\MetaModule;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PumpingStationExpenditureMetaObjectColumnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thermalModuleId = MetaModule::where('name', 'thermal_power')->first()->meta_module_id;
        $columnKindId = MetaKind::where('name', 'column')->first()->meta_kind_id;
        $commonAttrs = [
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'desc' => 'Владелец аттрибута',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'desc' => 'Создатель аттрибута',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'desc' => 'Пользователь, вносивший изменения',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'status_id',
                'caption' => 'Статус записи',
                'desc' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
            ],
        ];

        $pumping_station_expenditures_attrs = [
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'pumping_station_expenditure_id',
                'caption' => 'Идентификатор расхода',
                'desc' => 'Идентификатор расхода',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_pumping_station_id',
                'caption' => 'Идентификатор насосной',
                'desc' => 'Идентификатор насосной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'year',
                'caption' => 'Год',
                'desc' => 'Год',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'total',
                'caption' => 'Общие затраты',
                'desc' => 'Общие затраты',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'electricity_volume',
                'caption' => 'Объем электроэнергии',
                'desc' => 'Объем электроэнергии, кВт*ч',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'purchase_of_electricity',
                'caption' => 'Затраты на покупку электроэнергии',
                'desc' => 'Затраты на покупку электроэнергии, тыс. руб.',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'cold_water_volume',
                'caption' => 'Объем холодной воды',
                'desc' => 'Объем холодной воды, м3',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'purchase_of_cold_water',
                'caption' => 'Затраты на покупку холодной воды',
                'desc' => 'Затраты на покупку холодной воды, тыс. руб.',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'operational_staff',
                'caption' => 'Численность эксплуатационного персонала',
                'desc' => 'Численность эксплуатационного персонала, чел',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'operational_staff_salary',
                'caption' => 'Затраты на оплату труда эксплуатационного персонала',
                'desc' => 'Затраты на оплату труда эксплуатационного персонала, тыс. руб.',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'repair_staff',
                'caption' => 'Численность ремонтного персонала',
                'desc' => 'Численность ремонтного персонала, чел',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'repair_staff_salary',
                'caption' => 'Затраты на оплату труда ремонтного персонала',
                'desc' => 'Затраты на оплату труда ремонтного персонала, тыс. руб.',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'engineering_staff',
                'caption' => 'Численность ИТР',
                'desc' => 'Численность ИТР, чел',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'engineering_staff_salary',
                'caption' => 'Затраты на оплату труда ИТР',
                'desc' => 'Затраты на оплату труда ИТР, тыс. руб.',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'maintenance_cost',
                'caption' => 'Затраты по договору тех. обслуживания',
                'desc' => 'Затраты по договору тех. обслуживания, тыс. руб.',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'repair_cost',
                'caption' => 'Затраты на ремонт',
                'desc' => 'Затраты на ремонт, тыс. руб.',
            ],
        ];

        array_push($pumping_station_expenditures_attrs, ...$commonAttrs);

        foreach ($pumping_station_expenditures_attrs as &$attr) {
            $attr['meta_module_id'] = $thermalModuleId;
            $attr['meta_kind_id'] = $columnKindId;
            $attr['name'] = 'meta_' . 'pumping_station_expenditure_' . $attr['object'];
            $attr['class_name'] = PumpingStationExpenditure::class;
        }

        MetaObject::insert($pumping_station_expenditures_attrs);
    }
}
