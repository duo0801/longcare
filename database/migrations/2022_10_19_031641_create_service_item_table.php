<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_item', function (Blueprint $table) {
            $table->comment('服務項目單價表');

            $table->increments('id');
            $table->string('sino')->default('')->comment('服務代碼');
            $table->string('sinm')->default('')->comment('服務項目');
            $table->integer('pay_prc')->comment('支付價格');
            $table->float('pay_per')->comment('成數設定');
            $table->integer('pay_calc')->comment('設定價格');
            $table->integer('pay_overtime')->comment('加班費(假日)');
            $table->integer('sitime')->comment('分鐘數');
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
        Schema::dropIfExists('service_item');
    }
}
