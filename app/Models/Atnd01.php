<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use App\Models\Traits\HasCreatedUpdatedUser;

use Illuminate\Database\Eloquent\Model;

class Atnd01 extends Model
{
	use HasDateTimeFormatter;
	use HasCreatedUpdatedUser;
    protected $table = 'atnd01';
    
}
