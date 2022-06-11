<?php

namespace Database\Seeders\Meta\MetaObjects\MetaObjectColumn;

use App\Models\BoilerRoom\BoilerRoomConsumer\BoilerRoomConsumer;
use App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkRepair\HeatingNetworkRepair;
use App\Models\BoilerRoom\BoilerRoomRepair\BoilerRoomRepair;
use App\Models\Meta\MetaKind\MetaKind;
use App\Models\Meta\MetaModule\MetaModule;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HeatingNetworkRepairMetaObjectColumnSeeder extends Seeder
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

        $heating_network_repairs_attrs = [
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'heating_network_accident_id',
                'caption' => 'Идентификатор ремонта',
                'desc' => 'Идентификатор ремонта',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_heating_network_id',
                'caption' => 'Идентификатор участка теплосети',
                'desc' => 'Идентификатор участка теплосети',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'type',
                'caption' => 'Тип мероприятия',
                'desc' => 'Тип мероприятия',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'date',
                'caption' => 'Дата проведения',
                'desc' => 'Дата проведения',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'expenditures',
                'caption' => 'Затраты на ремонт',
                'desc' => 'Затраты на ремонт, тыс. руб.',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'repair_volume',
                'caption' => 'Объем ремонта',
                'desc' => 'Объем ремонта',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'note',
                'caption' => 'Примечание',
                'desc' => 'Примечание',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'report',
                'caption' => 'Отчет о проведении',
                'desc' => 'Отчет о проведении',
            ],
        ];

        array_push($heating_network_repairs_attrs, ...$commonAttrs);

        foreach ($heating_network_repairs_attrs as &$attr) {
            $attr['meta_module_id'] = $thermalModuleId;
            $attr['meta_kind_id'] = $columnKindId;
            $attr['name'] = 'meta_' . 'heating_network_repair_' . $attr['object'];
            $attr['class_name'] = HeatingNetworkRepair::class;
        }

        MetaObject::insert($heating_network_repairs_attrs);
    }
}
