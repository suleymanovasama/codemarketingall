<?php

namespace App\Repositories;


use App\Models\firstinfo;
use App\Repositories\Abstract\AbstractRepository;

class firstinfoRepository extends AbstractRepository
{
    protected $modelClass=firstinfo::class;
}
