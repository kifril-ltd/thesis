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
        Schema::create('rel_filter_entities', function (Blueprint $table) {
            $table->uuid('rel_filter_id');
            $table->string('title')->nullable(false);
            $table->text('settings')->nullable(false);

            $table->primary('rel_filter_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rel_filter_entities');
    }
};
