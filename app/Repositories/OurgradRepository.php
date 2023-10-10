<?php

namespace App\Repositories;

use App\Models\OurgradModel;

use App\Repositories\Abstract\AbstractRepository;

class OurgradRepository extends AbstractRepository
{
    protected $modelClass=OurgradModel::class;
}
