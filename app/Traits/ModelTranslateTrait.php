<?php

namespace App\Traits;

trait ModelTranslateTrait{
    public function getAttribute($key)
    {
        foreach($this->translatable as $column){
            if($column==$key){
                $data = [];
                $langs = ['az','en','ru'];
                if(!isset(json_decode($this->attributes[$column], true)[app()->getLocale()])){
                    unset($langs[array_search(app()->getLocale(), $langs)]);
                    foreach($langs as $lang){
                            if(!isset(json_decode($this->attributes[$column], true)[$lang])){
                                unset($langs[array_search($lang, $langs)]);
                            }else{

                                 $data[$lang] = json_decode($this->attributes[$column], true)[$lang];
                            }
                            if(count($langs)<2){

                                foreach($langs as $dil){
                                    $data[app()->getLocale()] = @json_decode($this->attributes[$column], true)[$dil];
                                }
                            }
                    }

                }else{
                    $data[app()->getLocale()] = json_decode($this->attributes[$column], true)[app()->getLocale()];
                }
            $this->attributes[$column] =  json_encode($data);
            }
        }

        return parent::getAttribute($key);
    }
}

