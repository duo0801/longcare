<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use App\Models\Traits\HasCreatedUpdatedUser;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Hsa01 extends Model
{
	use HasDateTimeFormatter;
    use HasCreatedUpdatedUser;
    use SoftDeletes;

    protected $table = 'hsa01';
    
}
