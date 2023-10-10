<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomeimgRequest;
use App\Http\Requests\Logo;
use App\Models\Homeimg;
use App\Models\LogoModel;
use App\Services\RepositoryService\HomeimgService;
use App\Services\RepositoryService\LogoService;
use Illuminate\Http\Request;


class HomeimgController extends Controller
{
    public function __construct(protected HomeimgService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();

        return view('admin.homeimg.index',['models'=>$models]);
    }
    public function create(HomeimgService $homeimgService)
    {

        return view('admin.homeimg.form');
    }
    public function store(HomeimgRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.homeimg.index');
    }

    public function edit(Homeimg $homeimg,HomeimgService $homeimgService)
    {
        $homeimgs=$homeimgService->CachedHomeimg();
        return view('admin.homeimg.form',['model'=>$homeimg,'logo'=>$homeimgs]);
    }
    public function update( Homeimg $homeimg,HomeimgRequest $request)
    {

        $this->service->update($request,$homeimg);

        return redirect()->back();
    }

    public function destroy(Homeimg $homeimg)
    {
        $this->service->delete($homeimg);
        return redirect()->back();
    }
}
