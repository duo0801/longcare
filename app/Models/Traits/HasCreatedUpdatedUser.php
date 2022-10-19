<?php

namespace App\Models\Traits;

use Admin;
use Illuminate\Support\Facades\Date;
use Dcat\Admin\Models\Administrator;
trait HasCreatedUpdatedUser
{
	/**
	 * [bootHasCreatedUpdatedUser 自動存檔操作建立、編輯人員]
	 * @Author   Eason
	 * @DataTime 2022-09-18T18:38:10+0800
	 */
	protected static function bootHasCreatedUpdatedUser()
    {
	    static::creating(function ($model) {
            $model->created_user = Admin::user()->id ?? 1;
        });
	    static::saving(function ($model) {
	        $model->updated_user = Admin::user()->id ?? 1;
        });

    }

    public function creator() {
        return $this->hasOne(Administrator::class, "id", "created_user");
    }

    public function updator() {
        return $this->hasOne(Administrator::class, "id", "updated_user");
    }
}