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
        Schema::create('meta_kinds', function (Blueprint $table) {
            $table->uuid('meta_kind_id');
            $table->enum('link', ['object', 'registry'])->nullable(false);
            $table->string('name', 255)->nullable(false);
            $table->string('caption', 255)->nullable(true)->default(null);
            $table->text('desc')->nullable(true)->default(null);

            $table->primary('meta_kind_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meta_kinds');
    }
};
