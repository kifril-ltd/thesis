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
        Schema::create('meta_modules', function (Blueprint $table) {
            $table->uuid('meta_module_id');
            $table->string('name', 255)->nullable(false);
            $table->string('caption', 255)->nullable(false);
            $table->text('desc')->nullable(true)->default(null);
            $table->uuid('parent_id')->nullable(true)->default(null);

            $table->primary('meta_module_id');
            $table->foreign('parent_id')->references('meta_module_id')->on('meta_modules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meta_modules');
    }
};
