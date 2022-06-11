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
        Schema::create('boiler_room_boilers', function (Blueprint $table) {
            $table->uuid('boiler_room_boiler_id');
            $table->uuid('boiler_room_id')->nullable(false);

            // Марка
            $table->string('stamp', 255)->nullable(true);
            // Установленная мощность котла, Гкал/час
            $table->double('installed_capacity')->nullable(true)->default(0.0);
            // Располагаемая мощность котла, Гкал/час
            $table->double('available_power')->nullable(true)->default(0.0);
            // Год ввода котла в эксплуатацию
            $table->integer('operation_year')->nullable(true)->default(1970);
            // Год последнего капитального ремонта здания
            $table->integer('building_renovation_year')->nullable(true)->default(1970);
            // Тип основного топлива
            $table->string('type_of_main_fuel')->nullable(true);
            // Вид используемого резервного топлива
            $table->string('type_of_backup_fuel')->nullable(true);
            // Теплоноситель
            $table->string('heat_carrier')->nullable(true);

            $table->uuid('owner_id');
            $table->uuid('created_by');
            $table->uuid('updated_by');

            $table->timestamps();
            $table->softDeletes();

            $table->primary('boiler_room_boiler_id');
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
        Schema::dropIfExists('boiler_room_boilers');
    }
};
