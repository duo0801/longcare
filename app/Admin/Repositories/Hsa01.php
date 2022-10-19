<?php

namespace App\Admin\Repositories;

use App\Models\Hsa01 as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Hsa01 extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
