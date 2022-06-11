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
        Schema::create('thermal_chamber_shut_off_valves', function (Blueprint $table) {
            $table->uuid('thermal_chamber_shut_off_valve_id');
            $table->uuid('heating_network_thermal_chamber_id')->nullable(false);

            // Название
            $table->string('title', 255)->nullable(false);
            // Диаметр запорной арматуры
            $table->double('diameter')->nullable(false)->default(0.0);
            // Количество
            $table->integer('quantity')->nullable(false)->default(0);

            $table->uuid('owner_id');
            $table->uuid('created_by');
            $table->uuid('updated_by');

            $table->timestamps();
            $table->softDeletes();

            $table->primary('thermal_chamber_shut_off_valve_id');
            $table->foreign('heating_network_thermal_chamber_id')->references('heating_network_thermal_chamber_id')->on('heating_network_thermal_chambers');
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
        Schema::dropIfExists('thermal_chamber_shut_off_valves');
    }
};
