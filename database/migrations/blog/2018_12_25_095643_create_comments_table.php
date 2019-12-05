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
            $table->increments('id');
            $table->integer('user_id');
            $table->string('user_name', 30);
            $table->string('to_user_name', 30)->default('');
            $table->string('avatar', 255);
            $table->integer('aid')->comment('記事ID');
            $table->text('content')->comment('コメント内容');
            $table->text('markdown_content')->comment('markdownしたコメント内容');
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
        Schema::dropIfExists('comments');
    }
}
