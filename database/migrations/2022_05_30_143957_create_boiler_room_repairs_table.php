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
        Schema::create('boiler_room_repairs', function (Blueprint $table) {
            $table->uuid('boiler_room_repair_id');
            $table->uuid('boiler_room_id')->nullable(false);

            //тип мероприятия
            $table->string('type')->nullable(false);
            //дата проведения
            $table->date('date')->nullable(false)->useCurrent();
            //оборудование
            $table->string('equipment')->nullable(false);
            //марка
            $table->string('stamp')->nullable(true);
            //затраты на ремонт, тыс.руб
            $table->double('expenditures')->nullable(false)->default(0.0);
            //примечание
            $table->text('note')->nullable(true);

            $table->uuid('owner_id');
            $table->uuid('created_by');
            $table->uuid('updated_by');

            $table->timestamps();
            $table->softDeletes();

            $table->primary('boiler_room_repair_id');
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
        Schema::dropIfExists('boiler_room_repairs');
    }
};
