<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('users', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('typeUser')->default(false);
            $table->string('userName', 20)->unique();
            $table->string('password', 50);
            $table->string('name', 50)->nullable();
            $table->string('lastName', 50)->nullable();
            $table->string('email', 100)->unique();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('image')->nullable();
            $table->integer('followers')->default(0);
            $table->integer('follows')->default(0);
            $table->string('description')->nullable();
            $table->string('birthday', 20)->nullable();
            $table->datetime('creation');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
