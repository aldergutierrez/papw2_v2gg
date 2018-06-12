<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LikesPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
        Schema::create('likes_posts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('idUser');
            $table->unsignedInteger('idPost');
            $table->boolean('like');
            $table->timestamps();
         
        });

            Schema::table('likes_posts', function (Blueprint $table) {
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
        Schema::dropIfExists('likes_posts');
    }
}
