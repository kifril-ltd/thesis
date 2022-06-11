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
        Schema::create('boiler_room_expenditures', function (Blueprint $table) {
            $table->uuid('boiler_room_expenditure_id');
            $table->uuid('boiler_room_id')->nullable(false);

            // Год
            $table->integer('year')->nullable(true)->default(1970);
            // Общие затраты
            $table->double('total')->nullable(true)->default(0.0);

            // Объем газа
            $table->double('gas_volume')->nullable(true)->default(0.0);
            // Затраты на покупку газа, тыс. руб.
            $table->double('purchase_of_gas')->nullable(true)->default(0.0);
            // Объем электроэнергии, кВт*ч
            $table->double('electricity_volume')->nullable(true)->default(0.0);
            // Затраты на покупку электроэнергии, тыс. руб.
            $table->double('purchase_of_electricity')->nullable(true)->default(0.0);
            // Объем холодной воды, м3
            $table->double('cold_water_volume')->nullable(true)->default(0.0);
            // Затраты на покупку холодной воды, тыс. руб.
            $table->double('purchase_of_cold_water')->nullable(true)->default(0.0);

            // Численность эксплуатационного персонала, чел
            $table->integer('operational_staff')->nullable(true)->default(0);
            // Затраты на оплату труда эксплуатационного персонала, тыс. руб.
            $table->double('operational_staff_salary')->nullable(true)->default(0.0);
            // Численность ремонтного персонала, чел
            $table->integer('repair_staff')->nullable(true)->default(0);
            // Затраты на оплату труда ремонтного персонала, тыс. руб.
            $table->double('repair_staff_salary')->nullable(true)->default(0.0);
            // Численность ИТР, чел
            $table->integer('engineering_staff')->nullable(true)->default(0);
            // Затраты на оплату труда ИТР, тыс. руб.
            $table->double('engineering_staff_salary')->nullable(true)->default(0.0);

            // Затраты по договору тех. обслуживания, тыс. руб.
            $table->double('maintenance_cost')->nullable(true)->default(0.0);
            // Затраты на ремонт котельной, тыс. руб.
            $table->double('repair_cost')->nullable(true)->default(0.0);
            // Затраты на эксплуатацию оборудования ХВО, тыс. руб.
            $table->double('equipment_operating_cost')->nullable(true)->default(0.0);


            $table->uuid('owner_id');
            $table->uuid('created_by');
            $table->uuid('updated_by');

            $table->timestamps();
            $table->softDeletes();

            $table->primary('boiler_room_expenditure_id');
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
        Schema::dropIfExists('boiler_room_expenditures');
    }
};
