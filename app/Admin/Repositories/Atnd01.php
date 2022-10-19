<?php

namespace App\Admin\Repositories;

use App\Models\Atnd01 as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Atnd01 extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
