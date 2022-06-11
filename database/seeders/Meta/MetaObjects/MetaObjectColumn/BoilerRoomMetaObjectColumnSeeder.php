<?php

namespace Database\Seeders\Meta\MetaObjects\MetaObjectColumn;

use App\Models\BoilerRoom\BoilerRoom;
use App\Models\BoilerRoom\BoilerRoomConsumer\BoilerRoomConsumer;
use App\Models\Meta\MetaKind\MetaKind;
use App\Models\Meta\MetaModule\MetaModule;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoilerRoomMetaObjectColumnSeeder extends Seeder
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

        $boiler_room_attrs = [
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_id',
                'caption' => 'ID котельной',
                'desc' => 'ID котельной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'title',
                'caption' => 'Название котельной',
                'desc' => 'Название котельной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'municipality',
                'caption' => 'Муниципалитет',
                'desc' => 'Муниципалитет',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'address',
                'caption' => 'Адрес котельной',
                'desc' => 'Адрес котельной (наименование населенного пункта, улица, строение)',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'regulation_type',
                'caption' => 'Тип регулирования',
                'desc' => 'Тип регулирования',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'source_type',
                'caption' => 'Тип источника',
                'desc' => 'Тип источника',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'summ_hot_water',
                'caption' => 'Суммарная подключённая нагрузка',
                'desc' => 'Суммарная подключённая нагрузка на котельную, Гкал/час',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'installed_capacity',
                'caption' => 'Установленная мощность котельной',
                'desc' => 'Установленная мощность котельной, Гкал/час',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'available_capacity',
                'caption' => 'Располагаемая мощность котельной',
                'desc' => 'Располагаемая мощность котельной, Гкал/час',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'temperature',
                'caption' => 'Температурный график работы котельной',
                'desc' => 'Температурный график работы котельной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'type_equipment',
                'caption' => 'Тип оборудования ХВО',
                'desc' => 'Тип обрудвания ХВО',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'mode',
                'caption' => 'Режим работы котельной',
                'desc' => 'Режим работы котельной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'number_chimneys',
                'caption' => 'Количество дымовых труб',
                'desc' => 'Количество дымовых труб',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'seasonality_of_work',
                'caption' => 'Сезонность работы котельной',
                'desc' => 'Сезонность работы котельной',
            ],
//            [
//                'meta_object_id' => Str::Uuid()->toString(),
//                'object' => 'owner_organization',
//                'caption' => 'Наименование собственника котельной',
//                'desc' => 'Наименование собственника котельной',
//            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'building_document_type',
                'caption' => 'Вид документа на здание котельной',
                'desc' => 'Вид документа на звание котельной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'building_document_number',
                'caption' => 'Номер документа на здание котельной',
                'desc' => 'Номер документа на здание котельной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'building_document_date',
                'caption' => 'Дата документа на здание котельной',
                'desc' => 'Дата документа на здание котельной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'name_of_the_owner',
                'caption' => 'Наименование собственника земельного участка',
                'desc' => 'Наименование собственника земельного участка',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'land_document_type_id',
                'caption' => 'Вид документа на земельный участок',
                'desc' => 'Вид документа на земельный участок',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'land_document_number',
                'caption' => 'Номер документа на земельный участок',
                'desc' => 'Номер документа на земельный участок',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'land_document_date',
                'caption' => 'Дата документа на земельный участок',
                'desc' => 'Дата документа на земельный участок',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'operating_organization',
                'caption' => 'Наименование эксплуатирующей организации',
                'desc' => 'Наименование эксплуатирующей организации',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'operating_document_type',
                'caption' => 'Вид документа передачи в эксплуатацию',
                'desc' => 'Вид документа передачи в эксплуатацию',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'operating_document_number',
                'caption' => 'Номер документа передачи в эксплуатацию',
                'desc' => 'Номер документа передачи в эксплуатацию',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'operating_document_date',
                'caption' => 'Дата документа передачи в эксплуатацию',
                'desc' => 'Дата документа передачи в эксплуатацию',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'connected_homes',
                'caption' => 'Количество подключенных жилых домов',
                'desc' => 'Количество подключенных жилых домов',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'summ_supply_for_homes',
                'caption' => 'Суммарная подключенная нагрузка для жилых домов',
                'desc' => 'Суммарная подключенная нагрузка для жилых домов, Гкал/час',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'summ_heating_supply_for_homes',
                'caption' => 'Суммарная пдключенная нагрузка на отопление жилых домов',
                'desc' => 'Суммарная пдключенная нагрузка на отопление жилых домов, Гкал/час',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'summ_hot_water_supply_for_homes',
                'caption' => 'Суммарная подключенная нагрузка на ГВС для жилых домов',
                'desc' => 'Суммарная подключенная нагрузка на ГВС для жилых домов , Гкал/час',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'summ_ventilation_supply_for_homes',
                'caption' => 'Суммарная подключенная нагрузка на вентиляцию жилых домов',
                'desc' => 'Суммарная подключенная нагрузка на вентиляцию жилых домов, Гкал/час',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'summ_heated_volume_for_homes',
                'caption' => 'Суммарный отапливаемый объем жилых домов',
                'desc' => 'Суммарный отапливаемый объем жилых домов, м3',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'number_of_residents',
                'caption' => 'Количество проживающих жителей',
                'desc' => 'Количество проживающих жителей, чел',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'connected_budgets',
                'caption' => 'Количество подключенных объектов социальной и бюджетной сферы',
                'desc' => 'Количество подключенных объектов социальной и бюджетной сферы',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'summ_supply_for_social',
                'caption' => 'Суммарная подключенная нагрузка для объектв социальной и бюжджетной сферы',
                'desc' => 'Суммарная подключенная нагрузка для объектв социальной и бюжджетной сферы, Гкал/час',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'summ_heating_supply_for_social',
                'caption' => 'Суммарная подключенная нагрузка на отопление объектов социальной и бюджетной сферы',
                'desc' => 'Суммарная подключенная нагрузка на отопление объектов социальной и бюджетной сферы, Гкал/час',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'summ_hot_water_supply_for_social',
                'caption' => 'Суммарная подключенная нагрузка на ГВС для объектов социальной и бюджетной сферы',
                'desc' => 'Суммарная подключенная нагрузка на ГВС для объектов социальной и бюджетной сферы, Гкал/час',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'summ_ventilation_supply_for_social',
                'caption' => 'Суммарная подключенная нагрузка на вентиляцию объектов социальной и бюджетной сферы',
                'desc' => 'Суммарная подключенная нагрузка на вентиляцию объектов социальной и бюджетной сферы, Гкал/час',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'summ_heated_volume_for_social',
                'caption' => 'Суммарный отапливаемый объем объектов социальной и бюджетной сферы',
                'desc' => 'Суммарный отапливаемый объем объектов социальной и бюджетной сферы, м3',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'number_hot_water_supply_for_social',
                'caption' => 'Количество пользователей ГВС в объектах социальной и бюджетной сферы',
                'desc' => 'Количество пользователей ГВС в объектах социальной и бюджетной сферы, чел',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'connected_others',
                'caption' => 'Количество подключенных прочих потребителей',
                'desc' => 'Количество подключенных прочих потребителей',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'summ_supply_others',
                'caption' => 'Суммарная подключенная нагрузка для прочих потребителей',
                'desc' => 'Суммарная подключенная нагрузка для прочих потребителей, Гкал/час',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'summ_heating_supply_others',
                'caption' => 'Суммарная подключенная нагрузка на отопление прочих потребителей',
                'desc' => 'Суммарная подключенная нагрузка на отопление прочих потребителей , Гкал/час',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'summ_hot_water_supply_others',
                'caption' => 'Суммарная подключенная нагрузка на ГВС для прочих потребителей',
                'desc' => 'Суммарная подключенная нагрузка на ГВС для прочих потребителей, Гкал/час ',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'summ_ventilation_supply_others',
                'caption' => 'Суммарная подключенная нагрузка на вентиляцию прочих потребителей',
                'desc' => 'Суммарная подключенная нагрузка на вентиляцию прочих потребителей, Гкал/час ',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'summ_heated_volume_others',
                'caption' => 'Суммарный отапливаемый объем зданий прочих потребителей',
                'desc' => 'Суммарный отапливаемый объем зданий прочих потребителей, м3',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'number_hot_water_supply_others',
                'caption' => 'Количество пользователей ГВС у прочих потребителей',
                'desc' => 'Количество пользователей ГВС у прочих потребителей, чел',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'gas_consumption_device',
                'caption' => 'Тип (марка) прибора учета потребляемого газа',
                'desc' => 'Тип (марка) прибора учета потребляемого газа',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'thermal_energy_consumption_device',
                'caption' => 'Тип (марка) прибора учета отпускаемой тепловой энергии',
                'desc' => 'Тип (марка) прибора учета отпускаемой тепловой энергии',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'electricity_consumption_device',
                'caption' => 'Тип (марка) прибора учета потребляемой электроэнергии',
                'desc' => 'Тип (марка) прибора учета потребляемой электроэнергии',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'cold_water_consumption_device',
                'caption' => 'Тип (марка) прибора учета потребляемой холодной воды',
                'desc' => 'Тип (марка) прибора учета потребляемой холодной воды',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'category_of_reliability_power_supply_id',
                'caption' => 'Категория надежности электроснабжения',
                'desc' => 'Категория надежности электроснабжения',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'power_inputs',
                'caption' => 'Количество вводов электроэнергии',
                'desc' => 'Количество вводов электроэнергии',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'automatic_reserve_entry_id',
                'caption' => 'АВР',
                'desc' => 'АВР(Автоматический ввод резерва)',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'has_autonomous_power_supply_source',
                'caption' => 'Наличие автономного источника электроснабжения',
                'desc' => 'Наличие автономного источника электроснабжения',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'type_autonomous_power_supply_source',
                'caption' => 'Тип источника автономного электроснабжения',
                'desc' => 'Тип источника автономного электроснабжения',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'has_equipment_for_power_supply',
                'caption' => 'Наличие оборудования для подключения передвижного автономного источника питания',
                'desc' => 'Наличие оборудования для подключения передвижного автономного источника питания',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'installed_electrical_capacity',
                'caption' => 'Установленная электрическая мощность котельной',
                'desc' => 'Установленная электрическая мощность котельной, кВт',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'building_year',
                'caption' => 'Год постройки здания котельной',
                'desc' => 'Год постройки здания котельной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'wall_material',
                'caption' => 'Материал стен',
                'desc' => 'Материал стен',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'building_placement',
                'caption' => 'Размещение здания',
                'desc' => 'Размещение здания',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'building_renovation_year',
                'caption' => 'Год последнего капитального ремонта здания',
                'desc' => 'Год последнего капитального ремонта здания',
            ],
        ];

        array_push($boiler_room_attrs, ...$commonAttrs);

        foreach ($boiler_room_attrs as &$attr) {
            $attr['meta_module_id'] = $thermalModuleId;
            $attr['meta_kind_id'] = $columnKindId;
            $attr['name'] = 'meta_' . 'boiler_room_' . $attr['object'];
            $attr['class_name'] = BoilerRoom::class;
        }

        MetaObject::insert($boiler_room_attrs);
    }
}
