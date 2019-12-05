<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('author', 30);
            $table->string('title', 100);
            $table->string('intro', 255)->comment('記事の紹介');
            $table->longText('content')->comment('記事の内容');
            $table->longText('markdown_content')->comment('markdownした記事内容');
            $table->integer('comment_count');
            $table->longText('comment_list');
            $table->tinyInteger('status')->comment('1:draft 2:audit 3:pass')->default(1);
            $table->string('status_change', 100)->default('status変更記録');
            $table->string('css_style', 10)->default('style-1');
            $table->string('pic_name', 30)->default('');
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
        Schema::dropIfExists('articles');
    }
}
