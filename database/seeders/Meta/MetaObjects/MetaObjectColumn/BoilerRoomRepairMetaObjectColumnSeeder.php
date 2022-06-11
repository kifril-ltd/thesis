<?php

namespace Database\Seeders\Meta\MetaObjects\MetaObjectColumn;

use App\Models\BoilerRoom\BoilerRoomConsumer\BoilerRoomConsumer;
use App\Models\BoilerRoom\BoilerRoomRepair\BoilerRoomRepair;
use App\Models\Meta\MetaKind\MetaKind;
use App\Models\Meta\MetaModule\MetaModule;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoilerRoomRepairMetaObjectColumnSeeder extends Seeder
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

        $boiler_room_repairs_attrs = [
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_repair_id',
                'caption' => 'Идентификатор ремонта',
                'desc' => 'Идентификатор ремонта',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_id',
                'caption' => 'Идентификатор котельной',
                'desc' => 'Идентификатор котельной',
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
                'object' => 'equipment',
                'caption' => 'Оборудование',
                'desc' => 'Оборудование',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'stamp',
                'caption' => 'Марка',
                'desc' => 'Марка',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'expenditures',
                'caption' => 'Затраты на ремонт',
                'desc' => 'Затраты на ремонт, тыс. руб.',
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

        array_push($boiler_room_repairs_attrs, ...$commonAttrs);

        foreach ($boiler_room_repairs_attrs as &$attr) {
            $attr['meta_module_id'] = $thermalModuleId;
            $attr['meta_kind_id'] = $columnKindId;
            $attr['name'] = 'meta_' . 'boiler_room_repair_' . $attr['object'];
            $attr['class_name'] = BoilerRoomRepair::class;
        }

        MetaObject::insert($boiler_room_repairs_attrs);
    }
}
