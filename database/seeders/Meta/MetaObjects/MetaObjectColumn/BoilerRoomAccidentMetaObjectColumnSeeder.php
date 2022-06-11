<?php

namespace Database\Seeders\Meta\MetaObjects\MetaObjectColumn;

use App\Models\BoilerRoom\BoilerRoomAccident\BoilerRoomAccident;
use App\Models\BoilerRoom\BoilerRoomBoiler\BoilerRoomBoiler;
use App\Models\BoilerRoom\BoilerRoomConsumer\BoilerRoomConsumer;
use App\Models\BoilerRoom\BoilerRoomHeatingNetwork\BoilerRoomHeatingNetwork;
use App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkAccident\HeatingNetworkAccident;
use App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationAccident\PumpingStationAccident;
use App\Models\Meta\MetaKind\MetaKind;
use App\Models\Meta\MetaModule\MetaModule;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoilerRoomAccidentMetaObjectColumnSeeder extends Seeder
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

        $boiler_room_accident_attrs = [
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_accident_id',
                'caption' => 'Идентификатор аварии',
                'desc' => 'Идентификатор аварии',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_id',
                'caption' => 'Идентификатор котельной',
                'desc' => 'Идентификатор котельной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'detection_date',
                'caption' => 'Дата обнаружения',
                'desc' => 'Дата обнаружения',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'mode',
                'caption' => 'Режим работы',
                'desc' => 'Режим работы',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'elimination_date',
                'caption' => 'Дата устранения',
                'desc' => 'Дата устранения',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'reason',
                'caption' => 'Причина аварии',
                'desc' => 'Причина аварии',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'consumers_shutdown',
                'caption' => 'Отключение потребителей',
                'desc' => 'Отключение потребителей',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'shutdown_time',
                'caption' => 'Время отключения',
                'desc' => 'Время отключения',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'turn_on_time',
                'caption' => 'Время включения',
                'desc' => 'Время включения',
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
                'caption' => 'Отчет по аварии',
                'desc' => 'Отчет по аварии',
            ],
        ];

        array_push($boiler_room_accident_attrs, ...$commonAttrs);

        foreach ($boiler_room_accident_attrs as &$attr) {
            $attr['meta_module_id'] = $thermalModuleId;
            $attr['meta_kind_id'] = $columnKindId;
            $attr['name'] = 'meta_' . 'boiler_room_accident_' . $attr['object'];
            $attr['class_name'] = BoilerRoomAccident::class;
        }

        MetaObject::insert($boiler_room_accident_attrs);
    }
}
