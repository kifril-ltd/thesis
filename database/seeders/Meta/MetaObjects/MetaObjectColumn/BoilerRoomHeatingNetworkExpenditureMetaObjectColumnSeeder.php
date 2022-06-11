<?php

namespace Database\Seeders\Meta\MetaObjects\MetaObjectColumn;

use App\Models\BoilerRoom\BoilerRoomConsumer\BoilerRoomConsumer;
use App\Models\BoilerRoom\BoilerRoomExpenditure\BoilerRoomExpenditure;
use App\Models\Meta\MetaKind\MetaKind;
use App\Models\Meta\MetaModule\MetaModule;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoilerRoomHeatingNetworkExpenditureMetaObjectColumnSeeder extends Seeder
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

        $boiler_room_expenditures_attrs = [
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'heating_network_expenditure_id',
                'caption' => 'Идентификатор расхода на тепловую сеть',
                'desc' => 'Идентификатор расхода на тепловую сеть',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_id',
                'caption' => 'Идентификатор котельной',
                'desc' => 'Идентификатор котельной',
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

        array_push($boiler_room_expenditures_attrs, ...$commonAttrs);

        foreach ($boiler_room_expenditures_attrs as &$attr) {
            $attr['meta_module_id'] = $thermalModuleId;
            $attr['meta_kind_id'] = $columnKindId;
            $attr['name'] = 'meta_' . 'boiler_room_heating_network_expenditure_' . $attr['object'];
            $attr['class_name'] = BoilerRoomExpenditure::class;
        }

        MetaObject::insert($boiler_room_expenditures_attrs);
    }
}
