<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBdUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('idUsers')->primary();
            $table->boolean('typeUser')->default(false);
            $table->string('userName', 20)->unique();
            $table->string('password', 50);
            $table->string('name', 50)->nullable();
            $table->string('lastName', 50)->nullable();
            $table->string('email', 100)->unique();
            $table->string('country')->nullable();
            $table->string('image')->nullable();
            $table->integer('followers')->default(0);
            $table->integer('follows')->default(0);
            $table->string('description')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
}