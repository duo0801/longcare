<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCase02Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case02', function (Blueprint $table) {
            $table->comment('個案資料服務項目關聯表');

            $table->integer('case_id')->comment('case01關聯鍵');
            $table->integer('service_item_id')->comment('service_item關聯鍵');

            $table->index('case_id');
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
        Schema::dropIfExists('case02');
    }
}
