<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homeimg extends Model
{
    use HasFactory;
    protected $table='homeimg';
    protected $guarded=[];
    public $timestamps=false;
}
