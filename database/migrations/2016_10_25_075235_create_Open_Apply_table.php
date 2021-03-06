<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenApplyTable extends Migration
{
    public function up()
    {
        Schema::create('Open_Apply', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId');//分销商ID
            $table->string('name');//应用名称
            $table->string('appId');//appId
            $table->string('appSecret');//appSecret
            $table->string('ip');//授信IP
            $table->string('callback');//回调地址
            $table->integer('state')->default(0);//状态0启用1禁用
            $table->integer('sort')->default(0);//排序
            $table->text('remark')->nullable();//备注
            $table->softDeletes();
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
        Schema::drop('Open_Apply');
    }
}
