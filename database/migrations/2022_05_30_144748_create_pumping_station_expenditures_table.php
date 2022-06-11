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
        Schema::create('pumping_station_expenditures', function (Blueprint $table) {
            $table->uuid('pumping_station_expenditure_id');
            $table->uuid('boiler_room_pumping_station_id')->nullable(false);

            //год
            $table->integer('year')->nullable(false)->default(1970);
            //общие затраты
            $table->double('total')->nullable(false)->default(0.0);
            //объём потребления электроэнергии, тыс. кВТ*ч
            $table->double('electricity_volume')->nullable(false)->default(0.0);
            //Затраты на покупку электроэнергии, тыс. руб.
            $table->double('purchase_of_electricity')->nullable(false)->default(0.0);
            //Объем потребления холодной воды, м3
            $table->double('cold_water_volume')->nullable(false)->default(0.0);
            //Затраты на покупку холодной воды, тыс. руб.
            $table->double('purchase_of_cold_water')->nullable(false)->default(0.0);
            //Численность эксплуатационного персонала, чел
            $table->integer('operational_staff')->nullable(false)->default(0);
            //Затраты на оплату труда эксплуатационного персонала, тыс. руб.
            $table->double('operational_staff_salary')->nullable(false)->default(0.0);
            //Численность ремонтного персонала, чел
            $table->integer('repair_staff')->nullable(false)->default(0);
            //Затраты на оплату труда ремонтного персонала, тыс. руб.
            $table->double('repair_staff_salary')->nullable(false)->default(0.0);
            //Численность ИТР, тыс. руб.
            $table->integer('engineering_staff')->nullable(false)->default(0);
            //Затраты на оплату труда ИТР, тыс. руб.
            $table->double('engineering_staff_salary')->nullable(false)->default(0.0);
            //Затраты по договору тех. обслуживания теплового пункта, тыс. руб.
            $table->double('maintenance_cost')->nullable(false)->default(0.0);
            //Затраты на ремонт теплового пункта, тыс. руб.
            $table->double('repair_cost')->nullable(false)->default(0.0);

            $table->uuid('owner_id');
            $table->uuid('created_by');
            $table->uuid('updated_by');

            $table->timestamps();
            $table->softDeletes();

            $table->primary('pumping_station_expenditure_id');
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
        Schema::dropIfExists('pumping_station_expenditures');
    }
};
