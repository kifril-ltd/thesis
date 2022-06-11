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
        Schema::create('boiler_room_heating_networks', function (Blueprint $table) {
            $table->uuid('boiler_room_heating_network_id');
            $table->uuid('boiler_room_id')->nullable(false);

            // Наименование участка тепловой сети
            $table->string('title')->nullable(true);
            // Наименование собственника участка тепловой сети
            $table->string('owner_organization')->nullable(true);
            // Вид документа на участок тепловой сети
            $table->string('document_type')->nullable(true);
            // Номер документа на участок тепловой сети
            $table->string('document_number')->nullable(true);
            // Дата документа на участок тепловой сети
            $table->date('document_date')->nullable(true)->useCurrent();
            // Вид документа передачи в эксплуатацию
            $table->string('operation_document_type')->nullable(true);
            // Номер документа передачи в эксплуатацию
            $table->string('operation_document_number')->nullable(true);
            // Дата документа передачи в эксплуатацию
            $table->date('operation_document_date')->nullable(true)->useCurrent();

            // Год ввода в эксплуатацию
            $table->integer('operation_year')->nullable(true);
            // Средний диаметр трубопровода, мм (80)
            $table->double('pipeline_diameter')->nullable(true)->default(null);
            // Протяженность теплотрассы, м (81)
            $table->double('length_of_heating_main')->nullable(true)->default(null);
            // Количество трубопроводов (82) (2-хтрубная, 3-хтрубная, 4-хтрубная)
            $table->string('number_of_pipelines')->nullable(true)->default(null);
            // Тип прокладки (83) (воздушная, подземная в канале, подземная безканальная)
            $table->string('type_of_gasket')->nullable(true)->default(null);

            // Тип изоляции
            $table->string('type_of_insulation')->nullable(true);
            // Ёмкость участка тепловой сети, м3
            $table->double('capacity')->nullable(true)->default(0.0);


            $table->uuid('owner_id');
            $table->uuid('created_by');
            $table->uuid('updated_by');

            $table->timestamps();
            $table->softDeletes();

            $table->primary('boiler_room_heating_network_id');
            $table->foreign('boiler_room_id')->references('boiler_room_id')->on('boiler_rooms');
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
        Schema::dropIfExists('boiler_room_heating_networks');
    }
};
