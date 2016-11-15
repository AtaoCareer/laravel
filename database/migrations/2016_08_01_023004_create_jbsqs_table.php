<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJbsqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jbsqs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bumen');
            $table->string('keshi');
            $table->string('shenqingren');
            $table->string('yuangongbianhao');
            $table->enum('jiabanleibie', ['平时', '周末', '节假日']);
            $table->text('jiabanneirong');
            $table->dateTime('jiabankaishishijian');
            $table->dateTime('jiabanjieshushijian');
            $table->float('jiabanshichang');
            $table->enum('kezhangqueren', ['未确认', '通过']);
            $table->text('kezhangyijian');
            $table->enum('buzhangqueren', ['未确认', '通过']);
            $table->text('buzhangyijian');
            $table->dateTime('shenqingshijian');
            $table->dateTime('xiugaishijian');
            $table->smallInteger('guoqi');
            $table->string('kezhang');
            $table->string('buzhang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jbsqs');
    }
}
