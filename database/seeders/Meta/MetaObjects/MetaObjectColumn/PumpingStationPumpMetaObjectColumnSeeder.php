<?php

namespace Database\Seeders\Meta\MetaObjects\MetaObjectColumn;

use App\Models\BoilerRoom\BoilerRoomConsumer\BoilerRoomConsumer;
use App\Models\BoilerRoom\BoilerRoomPump\BoilerRoomPump;
use App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationPump\PumpingStationPump;
use App\Models\Meta\MetaKind\MetaKind;
use App\Models\Meta\MetaModule\MetaModule;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PumpingStationPumpMetaObjectColumnSeeder extends Seeder
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

        $pumping_station_pumps_attrs = [
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'pumping_station_pump_id',
                'caption' => 'Идентификатор насоса',
                'desc' => 'Идентификатор насоса',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_pumping_station_id',
                'caption' => 'Идентификатор насосной',
                'desc' => 'Идентификатор насосной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'purpose',
                'caption' => 'Назначение насоса',
                'desc' => 'Назначение насоса',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'stamp',
                'caption' => 'Марка',
                'desc' => 'Марка',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'operation_year',
                'caption' => 'Год ввода в эксплуатацию',
                'desc' => 'Год ввода в эксплуатацию',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'performance',
                'caption' => 'Производительность',
                'desc' => 'Производительность, м3/час',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'pressure',
                'caption' => 'Напор',
                'desc' => 'Напор, м.вод.ст.',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'engine_power',
                'caption' => 'Мощность двигателя',
                'desc' => 'Мощность двигателя, кВт',
            ],
        ];

        array_push($pumping_station_pumps_attrs, ...$commonAttrs);

        foreach ($pumping_station_pumps_attrs as &$attr) {
            $attr['meta_module_id'] = $thermalModuleId;
            $attr['meta_kind_id'] = $columnKindId;
            $attr['name'] = 'meta_' . 'pumping_station_pump_' . $attr['object'];
            $attr['class_name'] = PumpingStationPump::class;
        }

        MetaObject::insert($pumping_station_pumps_attrs);
    }
}
