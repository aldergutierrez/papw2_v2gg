<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBdJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->increments('idJob');
            $table->string('employment');
            $table->string('description', 500);
            $table->string('creativeField');
            $table->string('hours');
            $table->string('country');
            $table->string('city');

            $table->integer('idUsers', false, true);
            $table->foreign('idUsers')->references('idUsers')->on('users');

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
        Schema::dropIfExists('job');
    }
}
