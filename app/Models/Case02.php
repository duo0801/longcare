<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Case02 extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'case02';

    protected $primaryKey = '';

    public $timestamps = false;

}
