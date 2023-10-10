<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurgradModelTranslation extends Model
{
    use HasFactory;
    protected $table='ourgrad_translations';
    protected $guarded=[];
    public $timestamps=false;
    protected  $fillable = ['title','text','text2','image'];
}
