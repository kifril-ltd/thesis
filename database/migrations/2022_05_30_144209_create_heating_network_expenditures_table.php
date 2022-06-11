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
        Schema::create('heating_network_expenditures', function (Blueprint $table) {
            $table->uuid('heating_network_expenditure_id');
            $table->uuid('boiler_room_id')->nullable(false);

            $table->integer('year');
            // Общие затраты
            $table->double('total')->nullable(false)->default(0.0);
            // Численность эксплуатационного персонала, чел
            $table->integer('operational_staff')->nullable(false)->default(0);
            // Затраты на оплату труда эксплуатационного персонала, тыс. руб.
            $table->double('operational_staff_salary')->nullable(false)->default(0.0);
            // Численность ремонтного персонала, чел
            $table->integer('repair_staff')->nullable(false)->default(0);
            // Затраты на оплату труда ремонтного персонала, тыс. руб.
            $table->double('repair_staff_salary')->nullable(false)->default(0.0);
            // Численность ИТР, чел
            $table->integer('engineering_staff')->nullable(false)->default(0);
            // Затраты на оплату труда ИТР, тыс. руб.
            $table->double('engineering_staff_salary')->nullable(false)->default(0.0);

            // Затраты по договору тех. обслуживания, тыс. руб.
            $table->double('maintenance_cost')->nullable(false)->default(0.0);
            // Затраты на ремонт, тыс. руб.
            $table->double('repair_cost')->nullable(false)->default(0.0);


            $table->uuid('owner_id');
            $table->uuid('created_by');
            $table->uuid('updated_by');

            $table->timestamps();
            $table->softDeletes();

            $table->primary('heating_network_expenditure_id');
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
        Schema::dropIfExists('heating_network_expenditures');
    }
};
