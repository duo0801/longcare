<?php

namespace App\Admin\Repositories;

use App\Models\Case01 as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Case01 extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
