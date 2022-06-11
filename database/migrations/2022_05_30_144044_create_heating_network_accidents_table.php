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
        Schema::create('heating_network_accidents', function (Blueprint $table) {
            $table->uuid('heating_network_accident_id');
            $table->uuid('boiler_room_heating_network_id')->nullable(false);

            //дата обнаружения
            $table->date('detection_date')->nullable(false)->useCurrent();
            //режим в момент аварии
            $table->string('mode')->nullable(false);
            //дата устранения
            $table->date('elimination_date')->nullable(false)->useCurrent();
            //причина аварии
            $table->string('reason')->nullable(false);
            //отключение потребителей
            $table->boolean('consumers_shutdown')->nullable(false)->default(false);
            //время отключения
            $table->timestamp('shutdown_time')->nullable(false)->useCurrent();
            //время включения
            $table->timestamp('turn_on_time')->nullable(false)->useCurrent();
            //примечание
            $table->text('note')->nullable(true);

            $table->uuid('owner_id');
            $table->uuid('created_by');
            $table->uuid('updated_by');

            $table->timestamps();
            $table->softDeletes();

            $table->primary('heating_network_accident_id');
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
        Schema::dropIfExists('heating_network_accidents');
    }
};
