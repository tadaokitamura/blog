<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->dateTime('create_at');
            $table->dateTime('update_at');
            /*$table->timestamps();*/
        });
    }

    public function down()
    {
        Schema::drop('posts');
        /* Schema::dropIfExists('posts'); */
    }
}
