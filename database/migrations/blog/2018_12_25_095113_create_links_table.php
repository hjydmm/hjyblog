<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title', 30)->comment('ウェブサイトタイトル');
            $table->string('url', 100);
            $table->tinyInteger('show')->comment('1:show 2:hidden')->default(1);
            $table->tinyInteger('weight')->dafault(80);
            $table->tinyInteger('type')->comment('1:official 2:personal')->dafault(1);
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
        Schema::dropIfExists('links');
    }
}
