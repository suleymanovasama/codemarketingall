<?php

namespace App\Repositories;

use App\Models\CoursesModel;
use App\Repositories\Abstract\AbstractRepository;

class CoursesRepository  extends AbstractRepository
{
    protected $modelClass=CoursesModel::class;
}
