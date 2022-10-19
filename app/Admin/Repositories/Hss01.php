<?php

namespace App\Admin\Repositories;

use App\Models\Hss01 as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Hss01 extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
