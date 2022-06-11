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
        Schema::create('meta_objects', function (Blueprint $table) {
            $table->uuid('meta_object_id');
            $table->string('name', 255)->unique()->nullable(false);
            $table->string('object', 255)->nullable(true)->default(null);
            $table->string('caption', 255)->nullable(true)->default(null);
            $table->text('desc')->nullable(true)->default(null);
            $table->uuid('row_id')->nullable(true)->default(null);
            $table->uuid('meta_kind_id')->nullable(false);
            $table->uuid('meta_module_id')->nullable(false);
            $table->uuid('origin_id')->nullable(true)->default(null);
            $table->string('class_name')->nullable(true)->default(null);



            $table->primary('meta_object_id');
            $table->foreign('meta_module_id')->references('meta_module_id')->on('meta_modules');
            $table->foreign('meta_kind_id')->references('meta_kind_id')->on('meta_kinds');
            $table->foreign('origin_id')->references('meta_object_id')->on('meta_objects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meta_objects');
    }
};
