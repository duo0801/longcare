<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRec01Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rec01', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('scode')->default('1')->comment('狀態（0.無效、1.有效）');
            $table->string('recnm')->default('')->comment('姓名');
            $table->string('rec_gender')->default('m')->comment('性別（m.男性、w.女性、n.中性）');
            $table->date('birth_date')->nullable()->comment('出生年月日');
            $table->string('idcard')->nullable()->comment('身分證字號');
            $table->string('tel')->nullable()->comment('聯絡電話');
            $table->string('addr')->nullable()->comment('聯絡地址');
            $table->string('updated_user')->nullable()->comment('更新人員');
            $table->string('bknm')->nullable()->comment('銀行名稱');
            $table->string('bkno')->nullable()->comment('銀行代碼');
            $table->string('bkacc')->nullable()->comment('銀行帳號');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rec01');
    }
}
