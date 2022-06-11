<?php

namespace Database\Seeders\Meta\MetaObjects\MetaObjectColumn;

use App\Models\BoilerRoom\BoilerRoomConsumer\BoilerRoomConsumer;
use App\Models\BoilerRoom\BoilerRoomEquipment\BoilerRoomEquipment;
use App\Models\Meta\MetaKind\MetaKind;
use App\Models\Meta\MetaModule\MetaModule;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoilerRoomEquipmentMetaObjectColumnSeeder extends Seeder
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

        $boiler_room_equipment_attrs = [
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_equipment_id',
                'caption' => 'Идентификатор оборудования котельной',
                'desc' => 'Идентификатор оборудования котельной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_id',
                'caption' => 'Идентификатор котельной',
                'desc' => 'Идентификатор котельной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'stamp',
                'caption' => 'Марка теплообменника',
                'desc' => 'Марка теплообменника',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'operation_year',
                'caption' => 'Год ввода в эксплуатацию',
                'desc' => 'Год ввода в эксплуатацию',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'purpose',
                'caption' => 'Назначение теплообменника',
                'desc' => 'Назначение теплообменника',
            ],
        ];

        array_push($boiler_room_equipment_attrs, ...$commonAttrs);

        foreach ($boiler_room_equipment_attrs as &$attr) {
            $attr['meta_module_id'] = $thermalModuleId;
            $attr['meta_kind_id'] = $columnKindId;
            $attr['name'] = 'meta_' . 'boiler_room_equipment_' . $attr['object'];
            $attr['class_name'] = BoilerRoomEquipment::class;
        }

        MetaObject::insert($boiler_room_equipment_attrs);
    }
}
