<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CoursesRequest extends FormRequest
{
    public function rules(): array
    {
        $data= [
            'image'=>[Rule::requiredIf(request()->method==self::METHOD_POST),'image','mimes:jpg,jpeg,png,svg,webp'],
            'link'=>'nullable',
            'fullpay'=>'nullable',
            'fullmonth'=>'nullable',
            'fulltam'=>'nullable',
            'partpay'=>'nullable',
            'partmonth'=>'nullable',
            'parttam'=>'nullable',
        ];
        return $this->mapLanguageValidations($data);
    }
    private function mapLanguageValidations($data){
        foreach (config('app.langs') as $lang){
            $data[$lang]='array';
            $data["$lang.name"]='string';
            $data["$lang.caption"]='string';
            $data["$lang.full_text"]='string';
            $data["$lang.part_text"]='string';
            $data["$lang.inner_text1"]='string';
            $data["$lang.inner_text2"]='string';
        }

        return $data;
    }
}
