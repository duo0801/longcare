<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasCreatedUpdatedUser;


class Rec01 extends Model
{
	use HasDateTimeFormatter;
    use HasCreatedUpdatedUser;
    use SoftDeletes;

    protected $table = 'rec01';
    
}
