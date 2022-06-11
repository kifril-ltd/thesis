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
        Schema::create('pumping_station_repairs', function (Blueprint $table) {
            $table->uuid('pumping_station_repair_id');
            $table->uuid('boiler_room_pumping_station_id')->nullable(false);

            //Дата проведения
            $table->date('date')->nullable(false)->useCurrent();
            //Тип мероприятия
            $table->string('type')->nullable(false);
            //Оборудование
            $table->string('equipment')->nullable(false);
            //Марка
            $table->string('stamp')->nullable(false);
            //Затраты на ремонт ЦТП/Насосной, тыс. руб.
            $table->double('expenditures')->nullable(false)->default(0.0);
            //Примечание
            $table->text('note')->nullable(true);

            $table->uuid('owner_id');
            $table->uuid('created_by');
            $table->uuid('updated_by');

            $table->timestamps();
            $table->softDeletes();

            $table->primary('pumping_station_repair_id');
            $table->foreign('boiler_room_pumping_station_id')->references('boiler_room_pumping_station_id')->on('boiler_room_pumping_stations');
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
        Schema::dropIfExists('pumping_station_repairs');
    }
};
