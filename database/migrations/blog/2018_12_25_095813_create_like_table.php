<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('記事にいいねを与えたユーザーのID');
            $table->integer('aid')->comment('いいねをもらった記事のID');
            $table->tinyInteger('user_is_exist')->comment('1:exist 2:not exist')->default(1);
            $table->tinyInteger('article_is_exist')->comment('1:exist 2:not exist')->default(1);
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
        Schema::dropIfExists('like');
    }
}
