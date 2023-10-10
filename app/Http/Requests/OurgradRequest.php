<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OurgradRequest extends FormRequest
{


    public function rules(): array
    {
        $data= [
            'image'=>[Rule::requiredIf(request()->method==self::METHOD_POST),'image','mimes:jpg,jpeg,png,svg,webp'],

        ];
        return $this->mapLanguageValidations($data);
    }

    private function mapLanguageValidations($data){
        foreach (config('app.langs') as $lang){
            $data[$lang]='array';
            $data["$lang.title"]='string';
            $data["$lang.text"]='string';
            $data["$lang.text2"]='string';
        }
        return $data;
    }
}
