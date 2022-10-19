<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use App\Models\Traits\HasCreatedUpdatedUser;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Case01 extends Model
{
    use HasCreatedUpdatedUser;
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'case01';
    
}
