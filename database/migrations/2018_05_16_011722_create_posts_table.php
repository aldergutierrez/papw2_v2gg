<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('posts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title',20);
            $table->string('description',500);
            $table->string('image');
            $table->string('creativeField',50);
            $table->string('toolsUsed',100);
            $table->string('fellasTag');
            $table->integer('likes')->default(0);
            $table->integer('comments')->default(0);
            $table->integer('views')->default(0);
            $table->unsignedInteger('idUsers');
            $table->timestamps();
            $table->softDeletes();
             });

       
       Schema::table('posts', function(Blueprint $table) {
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
        Schema::dropIfExists('posts');
    }
}
