<?php

namespace App\Admin\Repositories;

use App\Models\Work01 as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Work01 extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
