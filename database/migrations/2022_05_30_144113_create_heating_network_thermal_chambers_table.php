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
        Schema::create('heating_network_thermal_chambers', function (Blueprint $table) {
            $table->uuid('heating_network_thermal_chamber_id');
            $table->uuid('boiler_room_heating_network_id')->nullable(false);

            // Обозначение
            $table->string('designation', 255)->nullable(false);
            // Координаты
            $table->json('coordinates')->nullable(true);

            $table->uuid('owner_id');
            $table->uuid('created_by');
            $table->uuid('updated_by');

            $table->timestamps();
            $table->softDeletes();

            $table->primary('heating_network_thermal_chamber_id');
            $table->foreign('boiler_room_heating_network_id')->references('boiler_room_heating_network_id')->on('boiler_room_heating_networks');
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
        Schema::dropIfExists('heating_network_thermal_chambers');
    }
};
