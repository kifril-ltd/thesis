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
        Schema::create('boiler_room_chimneys', function (Blueprint $table) {
            $table->uuid('boiler_room_chimney_id');
            $table->uuid('boiler_room_id')->nullable(false);

            // Обозначение
            $table->string('designation', 255);
            // Год постройки
            $table->integer('year_of_construction')->nullable(false)->default(1970);
            // Материал
            $table->string('material')->nullable(false);
            // Высота, м
            $table->double('height')->nullable(false)->default(0.0);
            // Диаметр, мм
            $table->double('diameter')->nullable(false)->default(0.0);
            // Год последнего капитального ремонта
            $table->integer('last_overhaul_year')->nullable(false)->default(1970);

            $table->uuid('owner_id');
            $table->uuid('created_by');
            $table->uuid('updated_by');

            $table->timestamps();
            $table->softDeletes();

            $table->primary('boiler_room_chimney_id');
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
        Schema::dropIfExists('boiler_room_chimneyes');
    }
};
