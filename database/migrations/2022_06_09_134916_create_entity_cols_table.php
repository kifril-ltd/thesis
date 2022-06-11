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
        Schema::create('entity_cols', function (Blueprint $table) {
            $table->uuid('entity_col_id');
            $table->uuid('meta_obj_id')->nullable(false);
            $table->uuid('meta_obj_dataset_id')->nullable(false);
            $table->string('data_type')->nullable(false)->default('string');
            $table->boolean('is_basic')->nullable(false)->default(false);
            $table->boolean('is_required')->nullable(false)->default(false);
            $table->enum('access_mode', ['locked', 'editable', 'storable'])->nullable(false)->default('locked');
            $table->string('metric')->nullable(true)->default(null);
            $table->text('constraint_php')->nullable(true)->default(null);
            $table->text('constraint_js')->nullable(true)->default(null);
            $table->text('help')->nullable(true)->default(null);

            $table->primary('entity_col_id');
            $table->foreign('meta_obj_id')->references('meta_object_id')->on('meta_objects');
            $table->foreign('meta_obj_dataset_id')->references('meta_object_id')->on('meta_objects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entity_cols');
    }
};
