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
        Schema::create('join_entities', function (Blueprint $table) {
            $table->uuid('join_entity_id');
            $table->uuid('meta_obj_id')->nullable(false);
            $table->uuid('source_id')->nullable(false);
            $table->uuid('source_col_id')->nullable(false);
            $table->uuid('target_id')->nullable(false);
            $table->string('prompt_forward')->nullable(true)->default(null);
            $table->string('prompt_backward')->nullable(true)->default(null);

            $table->primary('join_entity_id');
            $table->foreign('meta_obj_id')->references('meta_object_id')->on('meta_objects');
            $table->foreign('source_id')->references('meta_object_id')->on('meta_objects');
            $table->foreign('source_col_id')->references('meta_object_id')->on('meta_objects');
            $table->foreign('target_id')->references('meta_object_id')->on('meta_objects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('join_entities');
    }
};
