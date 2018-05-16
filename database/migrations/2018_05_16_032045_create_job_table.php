<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     
        Schema::create('job', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('employment');
            $table->string('description', 500);
            $table->string('creativeField');
            $table->string('hours');
            $table->string('country');
            $table->string('city');
            $table->unsignedInteger('idUsers');
            $table->timestamps();
            });

        Schema::table('job', function (Blueprint $table) {
            $table->foreign('idUsers')->references('id')->on('users');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job');
    }
}
