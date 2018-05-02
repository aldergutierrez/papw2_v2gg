<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBdPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('idPost');
            $table->string('title',20);
            $table->string('description',500);
            $table->string('image');
            $table->string('creativeField',50);
            $table->string('toolsUsed',100);
            $table->string('fellasTag');
            $table->datetime('creation');

            $table->integer('idUsers', false, true);
            $table->foreign('idUsers')->references('idUsers')->on('users');;
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
        Schema::dropIfExists('post');
    }
}
