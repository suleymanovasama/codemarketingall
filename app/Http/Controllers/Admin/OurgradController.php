<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OurgradRequest;
use App\Models\OurgradModel;
use App\Services\RepositoryService\OurgradService;

class OurgradController extends Controller
{
    public function __construct(protected OurgradService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();

        return view('admin.ourgrad.index',['models'=>$models]);
    }

    public function create(OurgradService $ourgradService)
    {
        $ourgrads=$ourgradService->CachedOurgrad();
        return view('admin.ourgrad.form', ['ourgrads'=>$ourgrads]);
    }
    public function store(OurgradRequest $request, OurgradModel $model)
    {
        $this->service->store($request);
        return redirect()->route('admin.ourgrad.index');
    }
    public function edit(OurgradModel $ourgrad,OurgradService $ourgradService)
    {
        $ourgrads=$ourgradService->CachedOurgrad();
        return view('admin.ourgrad.form',['model'=>$ourgrad,'ourgrad'=>$ourgrads]);
    }

    public function update( OurgradModel $ourgrad,OurgradRequest $request)
    {

        $this->service->update($ourgrad, $request);


        return redirect()->back();
    }
    public function destroy(OurgradModel $ourgrad)
    {
        $this->service->delete($ourgrad);
        return redirect()->back();
    }
}
