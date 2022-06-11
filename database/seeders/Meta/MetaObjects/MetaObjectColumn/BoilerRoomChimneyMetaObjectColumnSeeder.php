<?php

namespace Database\Seeders\Meta\MetaObjects\MetaObjectColumn;

use App\Models\BoilerRoom\BoilerRoomChimney\BoilerRoomChimney;
use App\Models\BoilerRoom\BoilerRoomConsumer\BoilerRoomConsumer;
use App\Models\Meta\MetaKind\MetaKind;
use App\Models\Meta\MetaModule\MetaModule;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoilerRoomChimneyMetaObjectColumnSeeder extends Seeder
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

        $boiler_room_chimney_attrs = [
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_chimney_id',
                'caption' => 'Идентификатор дымовой трубы',
                'desc' => 'Идентификатор дымовой трубы',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_id',
                'caption' => 'Идентификатор котельной',
                'desc' => 'Идентификатор котельной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'designation',
                'caption' => 'Обозначение',
                'desc' => 'Обозначение',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'year_of_construction',
                'caption' => 'Год постройки',
                'desc' => 'Год постройки',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'material',
                'caption' => 'Материал',
                'desc' => 'Материал',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'height',
                'caption' => 'Высота',
                'desc' => 'Высота, м',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'diameter',
                'caption' => 'Диаметр',
                'desc' => 'Диаметр, мм',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'last_overhaul_year',
                'caption' => 'Год последнего капитального ремонта',
                'desc' => 'Год последнего капитального ремонта',
            ],
        ];

        array_push($boiler_room_chimney_attrs, ...$commonAttrs);

        foreach ($boiler_room_chimney_attrs as &$attr) {
            $attr['meta_module_id'] = $thermalModuleId;
            $attr['meta_kind_id'] = $columnKindId;
            $attr['name'] = 'meta_' . 'boiler_room_chimney_' . $attr['object'];
            $attr['class_name'] = BoilerRoomChimney::class;
        }

        MetaObject::insert($boiler_room_chimney_attrs);
    }
}
