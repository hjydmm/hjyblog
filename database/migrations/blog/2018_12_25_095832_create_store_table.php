<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('記事をブックマークしたユーザーのID');
            $table->integer('aid')->comment('ブックマークされた記事のID');
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
        Schema::dropIfExists('store');
    }
}
