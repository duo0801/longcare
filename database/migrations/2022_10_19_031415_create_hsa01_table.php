<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHsa01Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hsa01', function (Blueprint $table) {
            $table->comment('居服員資料主表(Home Services Attendant)');

            $table->increments('id');
            $table->tinyInteger('scode')->default('1')->comment('狀態（0.離職、1.在職、2.留職停薪）');
            $table->string('hsa_rank')->nullable()->comment('職稱');
            $table->string('hsanm')->default('')->comment('姓名');
            $table->string('hsa_gender',1)->default('m')->comment('性別（m.男性、w.女性、n.中性）');
            $table->string('census')->nullable()->comment('籍別');
            $table->string('lc_account')->nullable()->comment('長照帳號(a)');
            $table->date('birth_date')->nullable()->comment('出生年月日');
            $table->string('idcard')->nullable()->comment('身分證字號');
            $table->date('arrival_date')->nullable()->comment('到職日(西元日期)');
            $table->date('effective_date')->nullable()->comment('生效日期(西元日期)');
            $table->date('expiry_date')->nullable()->comment('有效期限(西元日期)');
            $table->string('hsa_tel')->nullable()->comment('聯絡電話');
            $table->string('hsa_addr')->nullable()->comment('聯絡地址');
            $table->tinyInteger('fam_handicp')->default('0')->comment('身障手冊(眷屬)（0.否、1.是）');
            $table->string('fam_nih')->nullable()->comment('健保眷屬');
            $table->integer('rec_id')->nullable()->comment('介紹人關聯鍵');
            $table->tinyInteger('lic_flg1')->default('0')->comment('失智症證照（0.否、1.是）');
            $table->date('lic_flg1_expiry_date')->nullable()->comment('失智症證照有效期限');
            $table->tinyInteger('lic_flg2')->default('0')->comment('身障證照（0.否、1.是）');
            $table->date('lic_flg2_expiry_date')->nullable()->comment('身障證照有效期限');
            $table->tinyInteger('lic_flg3')->default('0')->comment('ba17a（0.否、1.是）');
            $table->date('lic_flg3_expiry_date')->nullable()->comment('ba17a有效期限');
            $table->tinyInteger('lic_flg4')->default('0')->comment('ba17b（0.否、1.是）');
            $table->date('lic_flg4_expiry_date')->nullable()->comment('ba17b有效期限');
            $table->tinyInteger('lic_flg5')->default('0')->comment('單一級或丙證（0.否、1.是）');
            $table->date('lic_flg5_expiry_date')->nullable()->comment('單一級或丙證有效期限');
            $table->tinyInteger('lic_flg6')->default('0')->comment('BLS證照（0.否、1.是）');
            $table->date('lic_flg6_expiry_date')->nullable()->comment('BLS證照有效期限');
            $table->tinyInteger('lic_flg7')->default('0')->comment('CPR證照（0.否、1.是）');
            $table->date('lic_flg7_expiry_date')->nullable()->comment('CPR證照有效期限');
            $table->string('hsa_account')->nullable()->comment('帳號');
            $table->string('lack_bonus')->nullable()->comment('缺工獎勵');
            $table->string('icenm')->nullable()->comment('緊急聯絡人');
            $table->string('icetel')->nullable()->comment('緊急聯絡人電話');
            $table->text('remark')->nullable()->comment('備註');
            $table->string('education')->nullable()->comment('學歷');
            $table->integer('created_user')->nullable()->comment('建立人員');
            $table->integer('updated_user')->nullable()->comment('更新人員');
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
        Schema::dropIfExists('hsa01');
    }
}
