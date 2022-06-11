<?php

namespace Database\Seeders\Meta\MetaObjects\MetaObjectColumn;

use App\Models\BoilerRoom\BoilerRoomBoiler\BoilerRoomBoiler;
use App\Models\BoilerRoom\BoilerRoomConsumer\BoilerRoomConsumer;
use App\Models\Meta\MetaKind\MetaKind;
use App\Models\Meta\MetaModule\MetaModule;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoilerRoomBoilerMetaObjectColumnSeeder extends Seeder
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

        $boiler_room_boilers_attrs = [
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_boiler_id',
                'caption' => 'Идентификатор котла',
                'desc' => 'Идентификатор котла',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_id',
                'caption' => 'ID котельной',
                'desc' => 'ID котельной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'stamp',
                'caption' => 'Марка',
                'desc' => 'Марка',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'installed_capacity',
                'caption' => 'Установленная мощность котла',
                'desc' => 'Установленная мощность котла, Гкал/час',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'available_power',
                'caption' => 'Располагаемая мощность котла',
                'desc' => 'Располагаемая мощность котла, Гкал/час',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'operation_year',
                'caption' => 'Год ввода котла в эксплуатацию',
                'desc' => 'Год ввода котла в эксплуатацию',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'type_of_main_fuel',
                'caption' => 'Вид используемого основного топлива',
                'desc' => 'Вид используемого основного топлива',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'type_of_backup_fuel',
                'caption' => 'Вид используемого резервного топлива',
                'desc' => 'Вид используемого резервного топлива',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'building_renovation_year',
                'caption' => 'Год последнего капитального ремонта здания',
                'desc' => 'Год последнего капитального ремонта здания',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'heat_carrier',
                'caption' => 'Используемый теплоноситель',
                'desc' => 'Используемый теплоноситель',
            ],
        ];

        array_push($boiler_room_boilers_attrs, ...$commonAttrs);

        foreach ($boiler_room_boilers_attrs as &$attr) {
            $attr['meta_module_id'] = $thermalModuleId;
            $attr['meta_kind_id'] = $columnKindId;
            $attr['name'] = 'meta_' . 'boiler_room_boiler_' . $attr['object'];
            $attr['class_name'] = BoilerRoomBoiler::class;
        }

        MetaObject::insert($boiler_room_boilers_attrs);
    }
}
