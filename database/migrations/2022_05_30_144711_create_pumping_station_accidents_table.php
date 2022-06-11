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
        Schema::create('pumping_station_accidents', function (Blueprint $table) {
            $table->uuid('pumping_station_accident_id');
            $table->uuid('boiler_room_pumping_station_id')->nullable(false);

            //Дата обнаружения
            $table->date('detection_date')->nullable(false)->useCurrent();
            //Режим в момент аварии
            $table->string('mode')->nullable(false);
            //Дата устранения
            $table->date('elimination_date')->nullable(false)->useCurrent();
            //Причина аварии
            $table->string('reason')->nullable(false);
            //Отключение потребителей
            $table->boolean('consumers_shutdown')->nullable(false)->default(false);
            //Время отключения
            $table->timestamp('shutdown_time')->nullable(true);
            //Время включения
            $table->timestamp('turn_on_time')->nullable(true);
            //Примечание
            $table->text('note')->nullable(true);

            $table->uuid('owner_id');
            $table->uuid('created_by');
            $table->uuid('updated_by');

            $table->timestamps();
            $table->softDeletes();

            $table->primary('pumping_station_accident_id');
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
        Schema::dropIfExists('pumping_station_accidents');
    }
};
