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
        Schema::create('boiler_room_thermal_energies', function (Blueprint $table) {
            $table->uuid('boiler_room_thermal_energy_id');
            $table->uuid('boiler_room_id')->nullable(false);

            // Год
            $table->integer('year')->nullable(false)->default(1970);
            // Годовой объем отпуска тепловой энергии потребителям, Гкал (88)
            $table->double('volume_of_heat_energy_release');

            $table->uuid('owner_id');
            $table->uuid('created_by');
            $table->uuid('updated_by');

            $table->timestamps();
            $table->softDeletes();

            $table->primary('boiler_room_thermal_energy_id');
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
        Schema::dropIfExists('boiler_room_thermal_energies');
    }
};
