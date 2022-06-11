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
        Schema::create('boiler_room_pumping_stations', function (Blueprint $table) {
            $table->uuid('boiler_room_pumping_station_id');
            $table->uuid('boiler_room_id')->nullable(false);

            //наименование цтп
            $table->string('title')->nullable(true);
            //адрес
            $table->string('address')->nullable(true);

            //Наименование собственника ЦТП/Насосной
            $table->string('owner_organization')->nullable(false);
            //Вид документа на ЦТП/Насосную
            $table->string('document_type')->nullable(false);
            //Номер документа на ЦТП/Насосную
            $table->string('document_number')->nullable(false);
            //Дата документа на ЦТП/Насосную
            $table->date('document_date')->nullable(false)->useCurrent();
            //Наименование организации, эксплуатирующей ЦТП/Насосную
            $table->string('operation_organization')->nullable(false);
            //Вид документа передачи в эксплуатацию ЦТП/Насосной
            $table->string('operation_document_type')->nullable(false);
            //Номер документа передачи в эксплуатацию ЦТП/Насосной
            $table->string('operation_document_number')->nullable(false);
            //Дата документа передачи в эксплуатацию ЦТП/Насосной
            $table->date('operation_document_date')->nullable(false)->useCurrent();
            //Год ввода в эксплуатацию
            $table->integer('operation_year')->nullable(false)->default(1970);
            //Год постройки здания ЦТП/Насосной
            $table->integer('construction_year')->nullable(false)->default(1970);
            //Материал стен
            $table->string('wall_material')->nullable(false);
            //Размещение здания
            $table->string('building_placement')->nullable(false);
            //Год последнего капитального ремонта здания
            $table->integer('last_overhaul_year')->nullable(false)->default(1970);
            //Режим работы ЦТП/Насосной
            $table->string('mode')->nullable(false);

            $table->uuid('owner_id');
            $table->uuid('created_by');
            $table->uuid('updated_by');

            $table->timestamps();
            $table->softDeletes();

            $table->primary('boiler_room_pumping_station_id');
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
        Schema::dropIfExists('boiler_room_pumping_stations');
    }
};
