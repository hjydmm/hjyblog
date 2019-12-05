<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleRelateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_relate', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aid')->comment('記事ID');
            $table->integer('user_id');
            $table->tinyInteger('status')->comment('1:draft 2:audit 3:pass')->default(1);
            $table->smallInteger('like_number')->comment('点赞数')->default(0);
            $table->smallInteger('store_number')->comment('收藏数')->default(0);
            $table->smallInteger('comment_number')->comment('评论数')->default(0);
            $table->smallInteger('pv_number')->comment('阅读数')->default(0);
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
        Schema::dropIfExists('article_relate');
    }
}
