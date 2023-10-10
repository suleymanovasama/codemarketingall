<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurgradModel extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    protected $table='ourgrad';
    protected $guarded=[];
    public $timestamps=false;

    /**
     * @var string
     */
    public $translationModel=OurgradModelTranslation::class;
    public $translatedAttributes = ['title','text','text2'];
}
