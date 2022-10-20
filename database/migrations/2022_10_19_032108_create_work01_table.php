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
            $table->comment('工單主表');

            $table->increments('id');
            $table->tinyInteger('scode')->default('1')->comment('工單狀態（0.作廢、1.建立、2.核准、3.結轉）');
            $table->string('workno')->comment('工單編號');
            $table->integer('case_id')->comment('個案關聯鍵');
            $table->integer('hsa_id')->comment('居服員關聯鍵');
            $table->integer('service_item_id')->comment('service_item關聯鍵');
            $table->date('work_date')->comment('服務日期');
            $table->dateTime('work_on_at')->nullable()->comment('服務起始時間');
            $table->dateTime('work_off_at')->nullable()->comment('服務結束時間');
            $table->integer('created_user')->nullable()->comment('建立人員');
            $table->integer('updated_user')->nullable()->comment('更新人員');
            $table->timestamps();

            $table->unique(['case_id', 'hsa_id', 'service_item_id', 'work_date']);
            $table->index('case_id');
            $table->index('hsa_id');
            $table->index('service_item_id');
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
