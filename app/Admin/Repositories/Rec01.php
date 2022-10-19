<?php

namespace App\Admin\Repositories;

use App\Models\Rec01 as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Rec01 extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
