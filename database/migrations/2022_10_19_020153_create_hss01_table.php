<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHss01Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hss01', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('scode')->default('1')->comment('狀態（0.離職、1.在職、2.留職停薪）');
            $table->string('hss_rank')->nullable()->comment('職稱');
            $table->string('hssnm')->default('')->comment('姓名');
            $table->string('hss_gender')->default('m')->comment('性別（m.男性、w.女性、n.中性）');
            $table->string('lc_account')->nullable()->comment('長照帳號(abc)');
            $table->date('birth_date')->nullable()->comment('出生年月日');
            $table->string('idcard')->nullable()->comment('身分證字號');
            $table->date('arrival_date')->comment('到職日期(西元日期)');
            $table->date('effective_date')->nullable()->comment('長照小卡生效日期(西元日期)');
            $table->date('expiry_date')->nullable()->comment('長照小卡有效期限(西元日期)');
            $table->string('hss_tel')->nullable()->comment('聯絡電話');
            $table->string('hss_addr')->nullable()->comment('聯絡地址');
            $table->tinyInteger('fam_handicp')->default('0')->comment('身障手冊(眷屬)（0.否、1.是）');
            $table->string('fam_nih')->nullable()->comment('健保-眷屬');
            $table->tinyInteger('lic_flg1')->default('0')->comment('失智症證照（0.否、1.是）');
            $table->date('lic_flg1_expiry_date')->nullable()->comment('失智症證照有效期限');
            $table->tinyInteger('lic_flg2')->default('0')->comment('身障證照（0.否、1.是）');
            $table->date('lic_flg2_expiry_date')->nullable()->comment('身障證照有效期限');
            $table->tinyInteger('lic_flg3')->default('0')->comment('ba17a（0.否、1.是）');
            $table->date('lic_flg3_expiry_date')->nullable()->comment('ba17a有效期限');
            $table->tinyInteger('lic_flg4')->default('0')->comment('ba17b（0.否、1.是）');
            $table->date('lic_flg4_expiry_date')->nullable()->comment('ba17b有效期限');
            $table->string('icenm')->nullable()->comment('緊急聯絡人');
            $table->string('lcetel')->nullable()->comment('緊急聯絡人電話');
            $table->tinyInteger('trng_flg1')->default('0')->comment('基礎訓練(到職一年內)（0.否、1.是）');
            $table->tinyInteger('trng_flg2')->default('0')->comment('進階訓練(到職三年內)（0.否、1.是）');
            $table->tinyInteger('trng_flg3')->default('0')->comment('成長訓練(到職四年內)（0.否、1.是）');
            $table->string('created_user')->nullable()->comment('建立人員');
            $table->string('updated_user')->nullable()->comment('更新人員');
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
        Schema::dropIfExists('hss01');
    }
}
