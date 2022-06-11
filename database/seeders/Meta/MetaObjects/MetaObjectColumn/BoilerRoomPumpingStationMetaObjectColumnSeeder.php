<?php

namespace Database\Seeders\Meta\MetaObjects\MetaObjectColumn;

use App\Models\BoilerRoom\BoilerRoomBoiler\BoilerRoomBoiler;
use App\Models\BoilerRoom\BoilerRoomConsumer\BoilerRoomConsumer;
use App\Models\BoilerRoom\BoilerRoomHeatingNetwork\BoilerRoomHeatingNetwork;
use App\Models\BoilerRoom\BoilerRoomPumpingStation\BoilerRoomPumpingStation;
use App\Models\Meta\MetaKind\MetaKind;
use App\Models\Meta\MetaModule\MetaModule;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoilerRoomPumpingStationMetaObjectColumnSeeder extends Seeder
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

        $boiler_room_pumping_station_attrs = [
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_pumping_station_id',
                'caption' => 'Идентификатор насосной',
                'desc' => 'Идентификатор насосной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_id',
                'caption' => 'Идентификатор котельной',
                'desc' => 'Идентификатор котельной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'title',
                'caption' => 'Наименование',
                'desc' => 'Наименование',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'address',
                'caption' => 'Адрес',
                'desc' => 'Адрес',
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
                'caption' => 'Назначение',
                'desc' => 'Назначение',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'mode',
                'caption' => 'Режим работы',
                'desc' => 'Режим работы',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'name_of_the_owner',
                'caption' => 'Наименование собственника',
                'desc' => 'Наименование собственника',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'document_type',
                'caption' => 'Вид документа на насосную',
                'desc' => 'Вид документа на насосную',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'document_number',
                'caption' => 'Номер документа на насосную',
                'desc' => 'Номер документа на насосную',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'document_date',
                'caption' => 'Дата документа на насосную',
                'desc' => 'Дата документа на насосную',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'operation_organization',
                'caption' => 'Наименование эксплуатирующей организации',
                'desc' => 'Наименование эксплуатирующей организации',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'operation_document_type',
                'caption' => 'Вид документа передачи в эксплуатацию',
                'desc' => 'Вид документа передачи в эксплуатацию',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'operation_document_number',
                'caption' => 'Номер документа передачи в эксплуатацию',
                'desc' => 'Номер документа передачи в эксплуатацию',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'operation_document_date',
                'caption' => 'Дата документа передачи в эксплуатацию',
                'desc' => 'Дата документа передачи в эксплуатацию',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'construction_year',
                'caption' => 'Год постройки',
                'desc' => 'Год постройки',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'wall_material_id',
                'caption' => 'Материал стен',
                'desc' => 'Материал стен',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'building_placement_id',
                'caption' => 'Размещение здания',
                'desc' => 'Размещение здания',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'last_overhaul_year',
                'caption' => 'Год последнего капитального ремонта',
                'desc' => 'Год последнего капитального ремонта',
            ],
        ];

        array_push($boiler_room_pumping_station_attrs, ...$commonAttrs);

        foreach ($boiler_room_pumping_station_attrs as &$attr) {
            $attr['meta_module_id'] = $thermalModuleId;
            $attr['meta_kind_id'] = $columnKindId;
            $attr['name'] = 'meta_' . 'pumping_station_' . $attr['object'];
            $attr['class_name'] = BoilerRoomPumpingStation::class;
        }

        MetaObject::insert($boiler_room_pumping_station_attrs);
    }
}
