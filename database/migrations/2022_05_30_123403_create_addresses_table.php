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
        Schema::create('addresses', function (Blueprint $table) {
            $table->uuid('address_id');

            $table->string('result')->nullable(true);
            $table->string('postal_code')->nullable(true);
            $table->string('country')->nullable(true);
            $table->string('country_iso_code')->nullable(true);
            $table->string('region_type_full')->nullable(true);
            $table->string('area_type_full')->nullable(true);
            $table->string('area')->nullable(true);
            $table->string('city_type_full')->nullable(true);
            $table->string('city')->nullable(true);
            $table->string('settlement_type_full')->nullable(true);
            $table->string('settlement')->nullable(true);
            $table->string('street_type_full')->nullable(true);
            $table->string('house_type_full')->nullable(true);
            $table->string('house')->nullable(true);
            $table->double('geo_lat')->nullable(true);
            $table->double('geo_lon')->nullable(true);

            $table->timestamps();
            $table->softDeletes();

            $table->primary('address_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
};
