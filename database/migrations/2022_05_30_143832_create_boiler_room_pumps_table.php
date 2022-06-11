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
        Schema::create('boiler_room_pumps', function (Blueprint $table) {
            $table->uuid('boiler_room_pump_id');
            $table->uuid('boiler_room_id')->nullable(false);

            // Марка
            $table->string('stamp', 255);
            // Назначение насоса
            $table->string('purpose')->nullable(false);
            // Год ввода в эксплуатацию
            $table->integer('operation_year')->nullable(false)->default(1970);
            // Производительность, м3/час
            $table->double('performance')->nullable(false)->default(0.0);
            // Напор, м.вод.ст.
            $table->double('pressure')->nullable(false)->default(0.0);
            // Мощность двигателя, кВт
            $table->double('engine_power')->nullable(false)->default(0.0);

            $table->uuid('owner_id');
            $table->uuid('created_by');
            $table->uuid('updated_by');

            $table->timestamps();
            $table->softDeletes();

            $table->primary('boiler_room_pump_id');
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
        Schema::dropIfExists('boiler_room_pumps');
    }
};
