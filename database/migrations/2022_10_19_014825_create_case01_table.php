<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCase01Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case01', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('scode')->default('0')->comment('案件狀態（0.未開案、1.已開案、2、作廢、3.結案）');
            $table->string('caseno')->default('')->comment('案號');
            $table->string('casenm')->default('')->comment('姓名');
            $table->string('case_gender',1)->default('m')->comment('性別（m.男性、w.女性、n.中性）');
            $table->string('idcard')->nullable()->comment('身分證號');
            $table->date('birth_date')->nullable()->comment('出生日期');
            $table->tinyInteger('cms')->default('0')->comment('CMS（2~8級）');
            $table->tinyInteger('disability')->default('1')->comment('舊失能等級（1.輕度、2.中度、3.重度）');
            $table->tinyInteger('boon')->default('1')->comment('福利身分（1.一般、2.未達1倍、3.未達1.5倍、4.1.5~2.5倍）');
            $table->tinyInteger('alone_flg')->default('0')->comment('獨居老人身份（0.否、1.是）');
            $table->string('application_source')->nullable()->comment('申請來源');
            $table->string('application_other')->nullable()->comment('其它申請來源說明');
            $table->string('closed_source')->nullable()->comment('結案原因');
            $table->string('closed_other')->nullable()->comment('其它結案原因說明');
            $table->date('application_date')->comment('申請日期');
            $table->date('closed_date')->nullable()->comment('開案日期');
            $table->tinyInteger('assess_flg')->nullable()->comment('評估/照顧計畫（0.否、1.是）');
            $table->date('assess_date')->nullable()->comment('評估日期');
            $table->date('authorize_date')->nullable()->comment('核定日期');
            $table->string('reside_city')->nullable()->comment('居住地縣市');
            $table->string('reside_dist')->nullable()->comment('居住地鄉鎮市區');
            $table->string('reside_vil')->nullable()->comment('居住地(里)');
            $table->string('reside_addr')->nullable()->comment('居住地址');
            $table->string('tel')->nullable()->comment('聯絡電話');
            $table->string('census_city')->nullable()->comment('戶籍地縣市');
            $table->string('census_dist')->nullable()->comment('戶籍地鄉鎮市區');
            $table->string('census_vil')->nullable()->comment('戶籍地(里)');
            $table->string('census_addr')->nullable()->comment('戶籍地址');
            $table->string('care_center')->nullable()->comment('照管中心');
            $table->string('caregiver')->nullable()->comment('照管專員');
            $table->string('affiliation')->nullable()->comment('A單位名稱');
            $table->tinyInteger('dis_flg1')->default('0')->comment('照顧及專業服務特別從優（0.否、1.是）');
            $table->tinyInteger('dis_flg2')->default('0')->comment('交通特別從優（0.否、1.是）');
            $table->tinyInteger('dis_flg3')->default('0')->comment('輔具特別從優（0.否、1.是）');
            $table->tinyInteger('dis_flg4')->default('0')->comment('喘息特別從優（0.否、1.是）');
            $table->tinyInteger('dis_flg5')->default('0')->comment('ICF從優（0.否、1.是）');
            $table->tinyInteger('dis_flg6')->default('0')->comment('從優CMS（0.否、1.是）');
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
        Schema::dropIfExists('case01');
    }
}
