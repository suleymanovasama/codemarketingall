<?php

namespace App\Http\Controllers;


use App\Models\LogoModel;
use App\Services\RepositoryService\LogoService;
use Illuminate\Http\Request;

class Logo2Controller extends Controller
{

//    public function __construct(protected LogoService $service)
//    {
//
//    }
    public  function   index(){
    $logos=LogoModel::All();
   dd($logos);
    return view('front.pages.index', compact('logos'));
    }


}
