<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name', 20)->comment('ユーザーネーム')->default('visitor');
            $table->string('password', 100)->comment('パスワード')->default('');
            $table->string('email', 100)->comment('メール')->default('');
            $table->string('remember_token')->default('');
            $table->string('avatar', 255)->default('/assets/images/avatars/avatar_01.jpg');
            $table->string('github_name', 20)->comment('github ネーム')->default('');
            $table->string('github_homepage', 100)->comment('github ホームページ')->default('');
            $table->string('city', 20)->comment('都道府県')->default('');
            $table->string('website', 100)->comment('個人ページ')->default('');
            $table->string('introduction', 255)->comment('自己紹介')->default('');
            $table->tinyInteger('gender')->comment('1:男 2:女')->default(1);
            $table->tinyInteger('activation')->comment('1:active 2:not active')->default(1);
            $table->tinyInteger('online')->comment('1:online 2:not online')->default(1);
            $table->tinyInteger('status')->comment('1:オン  2：オフ')->default(1);
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
        Schema::dropIfExists('users');
    }
}
