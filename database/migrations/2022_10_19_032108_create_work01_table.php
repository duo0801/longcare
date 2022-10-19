<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWork01Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work01', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('scode')->default('1')->comment('工單狀態（0.作廢、1.建立、2.核准、3.結轉）');
            $table->string('workno')->default('')->comment('工單編號');
            $table->integer('case_id')->nullable()->comment('個案關聯鍵');
            $table->integer('hsa_id')->nullable()->comment('居服員關聯鍵');
            $table->string('sino')->default('')->comment('服務代碼');
            $table->string('sinm')->default('')->comment('服務項目');
            $table->integer('pay_prc')->comment('支付價格');
            $table->float('pay_per')->comment('成數設定');
            $table->integer('pay_calc')->comment('設定價格');
            $table->integer('pay_overtime')->comment('加班費(假日)');
            $table->integer('sitime')->comment('分鐘數');
            $table->date('work_date')->nullable()->comment('服務日期');
            $table->string('work_on_at')->nullable()->comment('服務起始時間');
            $table->string('work_off_at')->nullable()->comment('服務結束時間');
            $table->string('created_user')->nullable()->comment('建立人員');
            $table->string('updated_user')->nullable()->comment('更新人員');
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
        Schema::dropIfExists('work01');
    }
}
