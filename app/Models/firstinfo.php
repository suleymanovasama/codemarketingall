<?php

namespace App\Models;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class firstinfo extends Model implements TranslatableContract
{
    use Translatable;
    protected $table='firstionfo';
    protected $guarded=[];
    public $translationModel=firstinfo_translation::class;
    public $translatedAttributes = ['title'];
}
