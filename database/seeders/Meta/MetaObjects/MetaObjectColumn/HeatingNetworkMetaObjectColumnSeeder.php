<?php

namespace Database\Seeders\Meta\MetaObjects\MetaObjectColumn;

use App\Models\BoilerRoom\BoilerRoomBoiler\BoilerRoomBoiler;
use App\Models\BoilerRoom\BoilerRoomConsumer\BoilerRoomConsumer;
use App\Models\BoilerRoom\BoilerRoomHeatingNetwork\BoilerRoomHeatingNetwork;
use App\Models\Meta\MetaKind\MetaKind;
use App\Models\Meta\MetaModule\MetaModule;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HeatingNetworkMetaObjectColumnSeeder extends Seeder
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

        $boiler_room_heating_network_attrs = [
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_heating_network_id',
                'caption' => 'Идентификатор участка теплосети',
                'desc' => 'Идентификатор участка теплосети',
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
                'object' => 'name_of_the_owner',
                'caption' => 'Наименование собственника участка тепловой сети',
                'desc' => 'Наименование собственника участка тепловой сети',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'document_type',
                'caption' => 'Вид документа на участок тепловой сети',
                'desc' => 'Вид документа на участок тепловой сети',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'document_number',
                'caption' => 'Номер документа на участок тепловой сети',
                'desc' => 'Номер документа на участок тепловой сети',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'document_date',
                'caption' => 'Дата документа на участок тепловой сети',
                'desc' => 'Дата документа на участок тепловой сети',
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
                'object' => 'operation_year',
                'caption' => 'Год ввода в эксплуатацию',
                'desc' => 'Год ввода в эксплуатацию',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'pipeline_diameter',
                'caption' => 'Средний диаметр трубопровода',
                'desc' => 'Средний диаметр трубопровода, мм',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'length_of_heating_main',
                'caption' => 'Протяженность теплотрассы',
                'desc' => 'Протяженность теплотрассы, м',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'number_of_pipelines',
                'caption' => 'Количество трубопроводов',
                'desc' => 'Количество трубопроводов',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'type_of_gasket',
                'caption' => 'Тип прокладки',
                'desc' => 'Тип прокладки',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'type_of_insulation',
                'caption' => 'Тип изоляции',
                'desc' => 'Тип изоляции',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'capacity',
                'caption' => 'Ёмкость участка тепловой сети',
                'desc' => 'Ёмкость участка тепловой сети, м3',
            ],
        ];

        array_push($boiler_room_heating_network_attrs, ...$commonAttrs);

        foreach ($boiler_room_heating_network_attrs as &$attr) {
            $attr['meta_module_id'] = $thermalModuleId;
            $attr['meta_kind_id'] = $columnKindId;
            $attr['name'] = 'meta_' . 'heating_network_' . $attr['object'];
            $attr['class_name'] = BoilerRoomHeatingNetwork::class;
        }

        MetaObject::insert($boiler_room_heating_network_attrs);
    }
}
