<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 系统参数
 */
class CreateConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');//平台名称
            $table->string('enterprise');//企业名称
            $table->string('logo')->nullable();//系统Logo
            $table->string('domain')->nullable();//平台地址
            $table->string('assetsDomain')->nullable();//资源地址
            $table->string('tel');//联系电话
            $table->string('fax');//传真
            $table->string('email');//邮箱
            $table->string('qq');//QQ
            $table->string('addres');//地址


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
        Schema::drop('config');
    }
}
