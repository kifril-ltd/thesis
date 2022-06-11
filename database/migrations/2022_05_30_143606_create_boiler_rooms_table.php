<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boiler_rooms', function (Blueprint $table) {
            $table->uuid('boiler_room_id');

            //наименование
            $table->string('title')->nullable(true);
            //мунициальное образование
            $table->string('municipality')->nullable(true);
            //адрес
            $table->string('address')->nullable(true);
            //тип ругулирования
            $table->string('regulation_type')->nullable(true);
            //тип источника
            $table->string('source_type')->nullable(true);
            //суммарная подключенная нагрузка на котельную, Гкал/час
            $table->double('summ_hot_water')->nullable(true)->default(0.0);
            //Установленная мощность котельной, Гкал/час
            $table->double('installed_capacity')->nullable(true)->default(0.0);
            //Располагаемая мощность котельной, Гкал/час
            $table->double('available_capacity')->nullable(true)->default(0.0);
            //Температурный график работы котельной
            $table->string('temperature')->nullable(true);
            //тип оборудования хво
            $table->string('type_equipment')->nullable(true);
            //режим работы котельной
            $table->string('mode')->nullable(true);
            //количество дымовых труб
            $table->integer('number_chimneys')->nullable(true)->default(0);
            //сезонность работы котельной
            $table->string('seasonality_of_work')->nullable(true);
            //Наименование собственника котельной
            $table->string('name_of_the_owner')->nullable(true);
            //Вид документа на здание котельной
            $table->string('building_document_type')->nullable(true);
            //Номер документа на здание котельной
            $table->string('building_document_number')->nullable(true);
            //Дата документа на здание котельной
            $table->date('building_document_date')->nullable(true)->useCurrent();
            //Наименование собственника земельного участка
            $table->string('owner_organization')->nullable(true);
            //Вид документа на земельный участок
            $table->string('land_document_type')->nullable(true);
            //Номер документа на земельный участок
            $table->string('land_document_number')->nullable(true);
            //Дата документа на земельный участок
            $table->date('land_document_date')->nullable(true)->useCurrent();
            //Наименование организации, эксплуатирующей котельную
            $table->string('operating_organization')->nullable(true);
            //Вид документа передачи в эксплуатацию
            $table->string('operating_document_type')->nullable(true);
            //Номер документа передачи в эксплуатацию
            $table->string('operating_document_number')->nullable(true);
            //Дата документа передачи в эксплуатацию
            $table->date('operating_document_date')->nullable(true)->useCurrent();
            //Количество подключенных жилых домов
            $table->integer('connected_homes')->nullable(true)->default(0);
            //Суммарная подключенная нагрузка для жилых домов, Гкал/час
            $table->double('summ_supply_for_homes')->nullable(true)->default(0.0);
            // Суммарная подключенная нагрузка на отопление жилых домов , Гкал/час
            $table->double('summ_heating_supply_for_homes')->nullable(true)->default(0.0);
            //Суммарная подключенная нагрузка на ГВС для жилых домов , Гкал/час
            $table->double('summ_hot_water_supply_for_homes')->nullable(true)->default(0.0);
            //Суммарная подключенная нагрузка на вентиляцию жилых домов , Гкал/час
            $table->double('summ_ventilation_supply_for_homes')->nullable(true)->default(0.0);
            //Суммарный отапливаемый объем жилых домов, м3
            $table->double('summ_heated_volume_for_homes')->nullable(true)->default(0.0);
            // Количество проживающих жителей, чел
            $table->integer('number_of_residents')->nullable(true)->default(0);
            //Количество подключенных объектов социальной и бюджетной сферы
            $table->integer('connected_budgets')->nullable(true)->default(0);
            //Суммарная подключенная нагрузка для объектов социальной и бюджетной сферы, Гкал/час
            $table->double('summ_supply_for_social')->nullable(true)->default(0);
            //Суммарная подключенная нагрузка на отопление объектов социальной и бюджетной сферы , Гкал/час
            $table->double('summ_heating_supply_for_social')->nullable(true)->default(0);
            // Суммарная подключенная нагрузка на ГВС для объектов социальной и бюджетной сферы, Гкал/час
            $table->double('summ_hot_water_supply_for_social')->nullable(true)->default(0);
            //Суммарная подключенная нагрузка на вентиляцию объектов социальной и бюджетной сферы, Гкал/час
            $table->double('summ_ventilation_supply_for_social')->nullable(true)->default(0);
            //Суммарный отапливаемый объем объектов социальной и бюджетной сферы, м3
            $table->double('summ_heated_volume_for_social')->nullable(true)->default(0);
            // Количество пользователей ГВС в объектах социальной и бюджетной сферы, чел
            $table->integer('number_hot_water_supply_for_social')->nullable(true)->default(0);
            //Количество подключенных прочих потребителей
            $table->integer('connected_others')->nullable(true)->default(0);
            //Суммарная подключенная нагрузка для прочих потребителей, Гкал/час
            $table->double('summ_supply_others')->nullable(true)->default(0);
            //Суммарная подключенная нагрузка на отопление прочих потребителей , Гкал/час
            $table->double('summ_heating_supply_others')->nullable(true)->default(0);
            //Суммарная подключенная нагрузка на ГВС для прочих потребителей, Гкал/час
            $table->double('summ_hot_water_supply_others')->nullable(true)->default(0);
            //Суммарная подключенная нагрузка на вентиляцию прочих потребителей, Гкал/час
            $table->double('summ_ventilation_supply_others')->nullable(true)->default(0);
            //Суммарный отапливаемый объем зданий прочих потребителей, м3
            $table->double('summ_heated_volume_others')->nullable(true)->default(0);
            //Количество пользователей ГВС у прочих потребителей, чел
            $table->integer('number_hot_water_supply_others')->nullable(true)->default(0);
            //Тип (марка) прибора учета потребляемого газа
            $table->string('gas_consumption_device')->nullable(true);
            //Тип (марка) прибора учета отпускаемой тепловой энергии
            $table->string('thermal_energy_consumption_device')->nullable(true);
            //Тип (марка) прибора учета потребляемой электроэнергии
            $table->string('electricity_consumption_device')->nullable(true);
            //Тип (марка) прибора учета потребляемой холодной воды
            $table->string('cold_water_consumption_device')->nullable(true);
            //Категория надежности электроснабжения
            $table->string('category_of_reliability_power_supply')->nullable(true);
            //Количество вводов электроэнергии
            $table->integer('power_inputs')->nullable(true)->default(0);
            //АВР (Автоматический ввод резерва)
            $table->string('automatic_reserve_entry')->nullable(true);
            //Наличие автономного источника электроснабжения
            $table->boolean('has_autonomous_power_supply_source')->nullable(true)->default(true);
            //Тип источника автономного электроснабжения
            $table->string('type_autonomous_power_supply_source')->nullable(true);
            //Наличие оборудования для подключения передвижного автономного источника питания
            $table->boolean('has_equipment_for_power_supply')->nullable(true)->default(true);
            //Установленная электрическая мощность котельной, кВт
            $table->double('installed_electrical_capacity')->nullable(true)->default(0);
            //Год постройки здания котельной
            $table->integer('building_year')->nullable(true)->default(1970);
            //Материал стен
            $table->string('wall_material')->nullable(true);
            //Размещение здания
            $table->string('building_placement')->nullable(true);
            //Год последнего капитального ремонта здания
            $table->integer('building_renovation_year')->nullable(true)->default(1970);

            $table->uuid('owner_id');
            $table->uuid('created_by');
            $table->uuid('updated_by');

            $table->timestamps();
            $table->softDeletes();

            $table->primary('boiler_room_id');
            $table->foreign('owner_id')->references('user_id')->on('users');
            $table->foreign('created_by')->references('user_id')->on('users');
            $table->foreign('updated_by')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boiler_rooms');
    }
};
