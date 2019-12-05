<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('username',20)->notNull();
            $table -> string('password')->notNull();
            $table -> enum('gender',[1,2,3])->notNull()->comment('1:男 2:女 3:秘密')->default('1');
            $table -> string('mobile',50);
            $table -> string('email',50);
            $table -> tinyInteger('position_id');
            $table -> rememberToken();
            $table -> enum('status',[1,2])->notNull()->comment('1:オン 2:オフ')->default('1');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //删表
        Schema::dropIfExists('admin');
    }
}
