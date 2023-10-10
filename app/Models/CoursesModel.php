<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursesModel extends Model  implements TranslatableContract
{
    use HasFactory,Translatable;
    protected $table='courses';
    protected $guarded=[];
    public $timestamps=false;

    public $translationModel=CoursesTranslationsModel::class;
    public $translatedAttributes = ['name','caption','full_text', 'part_text', 'inner_text1', 'inner_text2'];
}
