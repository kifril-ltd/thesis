<?php

namespace Database\Seeders\Meta\MetaObjects\MetaObjectColumn;

use App\Models\BoilerRoom\BoilerRoomConsumer\BoilerRoomConsumer;
use App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkThermalChamber\HeatingNetworkThermalChamber;
use App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkThermalChamber\ThermalChamberResetDevice\ThermalChamberResetDevice;
use App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkThermalChamber\ThermalChamberShutOffValve\ThermalChamberShutOffValve;
use App\Models\BoilerRoom\BoilerRoomRepair\BoilerRoomRepair;
use App\Models\Meta\MetaKind\MetaKind;
use App\Models\Meta\MetaModule\MetaModule;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThermalChamberResetDeviceMetaObjectColumnSeeder extends Seeder
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

        $thermal_chambers_reset_device_attrs = [
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'thermal_chamber_reset_device_id',
                'caption' => 'Идентификатор сбросного устройства',
                'desc' => 'Идентификатор сбросного устройства',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'heating_network_thermal_chamber_id',
                'caption' => 'Идентификатор тепловой камеры',
                'desc' => 'Идентификатор тепловой камеры',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'title',
                'caption' => 'Название',
                'desc' => 'Название',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'diameter',
                'caption' => 'Диаметр',
                'desc' => 'Диаметр',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'quantity',
                'caption' => 'Количество',
                'desc' => 'Количество, шт',
            ],
        ];

        array_push($thermal_chambers_reset_device_attrs, ...$commonAttrs);

        foreach ($thermal_chambers_reset_device_attrs as &$attr) {
            $attr['meta_module_id'] = $thermalModuleId;
            $attr['meta_kind_id'] = $columnKindId;
            $attr['name'] = 'meta_' . 'thermal_chamber_reset_device_' . $attr['object'];
            $attr['class_name'] = ThermalChamberResetDevice::class;
        }

        MetaObject::insert($thermal_chambers_reset_device_attrs);
    }
}
