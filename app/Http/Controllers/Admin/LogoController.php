<?php

namespace App\Http\Controllers\Admin;


use App\Models\CompanyImage;
use App\Models\LogoModel ;

use App\Http\Requests\Logo;

use App\Services\RepositoryService\CompanyService;
use App\Services\RepositoryService\LogoService;
use Illuminate\Http\Request;


class LogoController
{

    public function __construct(protected LogoService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();

        return view('admin.logo.index',['models'=>$models]);
    }
    public function create(LogoService $logoService)
    {

        return view('admin.logo.form');
    }
    public function store(Logo $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.logo.index');
    }


    public function edit(LogoModel $logo,LogoService $logoService)
    {
        $logoo=$logoService->CachedLogo();
        return view('admin.logo.form',['model'=>$logo,'logo'=>$logoo]);
    }

    public function update( LogoModel $logo,Request $request)
    {

        $this->service->update($request,$logo);

        return redirect()->back();
    }
    public function destroy(LogoModel $logo)
    {
        $this->service->delete($logo);
        return redirect()->back();
    }

}
