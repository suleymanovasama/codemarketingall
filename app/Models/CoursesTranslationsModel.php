<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursesTranslationsModel extends Model
{
    use HasFactory;
    protected $table='courses_translations';
    protected $guarded=[];
    public $timestamps=false;
    protected  $fillable = ['name','caption','full_text', 'part_text', 'inner_text1', 'inner_text2','image', 'link', 'fullpay', 'fullmonth', 'fulltam', 'partpay', 'partmonth', 'parttam'];
}
