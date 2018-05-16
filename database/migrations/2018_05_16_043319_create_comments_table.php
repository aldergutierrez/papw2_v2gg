<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('comment', 255);
            $table->unsignedInteger('idUser');
            $table->unsignedInteger('idPost');
            $table->timestamps();
        });

            Schema::table('comments', function (Blueprint $table) {
            $table->foreign('idUser')->references('id')->on('users');
            $table->foreign('idPost')->references('id')->on('posts');
            });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
