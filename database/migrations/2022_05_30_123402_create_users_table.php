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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('user_id');
            $table->string('first_name', 255)->nullable(false);
            $table->string('last_name', 255)->nullable(false);
            $table->string('middle_name', 255);
            $table->string('login', 255)->unique();
            $table->string('email', 255)->unique();
            $table->bigInteger('phone')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            $table->timestamp('activated_at');

            $table->primary('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
