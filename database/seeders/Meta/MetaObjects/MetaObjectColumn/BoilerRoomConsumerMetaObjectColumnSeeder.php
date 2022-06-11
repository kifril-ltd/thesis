<?php

namespace Database\Seeders\Meta\MetaObjects\MetaObjectColumn;

use App\Models\BoilerRoom\BoilerRoomConsumer\BoilerRoomConsumer;
use App\Models\Meta\MetaKind\MetaKind;
use App\Models\Meta\MetaModule\MetaModule;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoilerRoomConsumerMetaObjectColumnSeeder extends Seeder
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

        $boiler_room_consumers_attrs = [
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_consumer_id',
                'caption' => 'ID потребителя котельной',
                'desc' => 'ID потребителя котельной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_id',
                'caption' => 'ID котельной',
                'desc' => 'ID котельной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'title',
                'caption' => 'Название потребителя котельной',
                'desc' => 'Название потребителя котельной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'type',
                'caption' => 'Тип потребителя',
                'desc' => 'Тип потребителя',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'address',
                'caption' => 'Адрес',
                'desc' => 'Адрес',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'total_connected_load',
                'caption' => 'Суммарная подключенная нагрузка на потребителя',
                'desc' => 'Суммарная подключенная нагрузка на потребителя, Гкал/час',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'heating',
                'caption' => 'Нагрузка на отопление',
                'desc' => 'Нагрузка на отопление, Гкал/час',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'hot_water_supply',
                'caption' => 'Нагрузка на ГВС',
                'desc' => 'Нагрузка на ГВС, Гкал/час',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'ventilation',
                'caption' => 'Нагрузка на вентиляцию',
                'desc' => 'Нагрузка на вентиляцию, Гкал/час',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'volume',
                'caption' => 'Отапливаемый объем',
                'desc' => 'Отапливаемый объем, м3',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'residents',
                'caption' => 'Количество проживающих жителей / пользователей ГВС',
                'desc' => 'Количество проживающих жителей / пользователей ГВС, чел',
            ],
        ];

        array_push($boiler_room_consumers_attrs, ...$commonAttrs);

        foreach ($boiler_room_consumers_attrs as &$attr) {
            $attr['meta_module_id'] = $thermalModuleId;
            $attr['meta_kind_id'] = $columnKindId;
            $attr['name'] = 'meta_' . 'boiler_room_consumer_' . $attr['object'];
            $attr['class_name'] = BoilerRoomConsumer::class;
        }

        MetaObject::insert($boiler_room_consumers_attrs);
    }
}
