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
        Schema::create('boiler_room_consumers', function (Blueprint $table) {
            $table->uuid('boiler_room_consumer_id');
            $table->uuid('boiler_room_id')->nullable(false);

            // Наименование потребтеля
            $table->string('title', 255)->nullable(false);
            // Тип потребителя
            $table->uuid('type')->nullable(true);
            // Адрес
            $table->string('address')->nullable(false);
            // Суммарная подключенная нагрузка
            $table->double('total_connected_load')->nullable(false)->default(0.0);
            // Нагрузка на отопление, Гкал/час
            $table->double('heating')->nullable(false)->default(0.0);
            // Нагрузка на ГВС, Гкал/час
            $table->double('hot_water_supply')->nullable(false)->default(0.0);
            // Нагрузка на вентиляцию, Гкал/час
            $table->double('ventilation')->nullable(false)->default(0.0);
            // Отапливаемый объем, м3
            $table->double('volume')->nullable(false)->default(0.0);
            // Количество проживающих жителей / пользователей ГВС, чел
            $table->integer('residents')->nullable(true);

            $table->uuid('owner_id');
            $table->uuid('created_by');
            $table->uuid('updated_by');

            $table->timestamps();
            $table->softDeletes();

            $table->primary('boiler_room_consumer_id');
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
        Schema::dropIfExists('boiler_room_consumers');
    }
};
