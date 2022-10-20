<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtnd01Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atnd01', function (Blueprint $table) {
            $table->comment('考勤資料主表');

            $table->increments('id');
            $table->tinyInteger('scode')->default('1')->comment('資料狀態（0.作廢、1.建立）');
            $table->tinyInteger('atnd_type')->nullable()->comment('類別（1.上班、2.下班）');
            $table->timestamp('atnd_at')->comment('打卡時間');
            $table->integer('hsa_id')->comment('居服員關聯鍵');
            $table->integer('created_user')->nullable()->comment('建立人員');
            $table->integer('updated_user')->nullable()->comment('更新人員');
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
        Schema::dropIfExists('atnd01');
    }
}
