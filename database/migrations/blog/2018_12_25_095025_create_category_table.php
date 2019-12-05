<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->smallInteger('fid')->comment('親ID');
            $table->smallInteger('ffid')->comment('親の親ID');
            $table->smallInteger('code')->comment('カテゴリーコード');
            $table->string('name', 20)->comment('カテゴリーネーム');
            $table->tinyInteger('weight')->comment('重さ');
            $table->string('color_code', 30);
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
        Schema::dropIfExists('category');
    }
}
