<?php

namespace App\Repositories;

use App\Models\LogoModel;
use App\Repositories\Abstract\AbstractRepository;

class LogoRepository extends AbstractRepository
{
    protected $modelClass=LogoModel::class;
}
