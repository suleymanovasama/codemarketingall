<?php

namespace App\Services\RepositoryService;

use App\Http\Requests\OurgradRequest;
use App\Models\OurgradModel;
use App\Repositories\OurgradRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class OurgradService
{
    public function __construct(protected OurgradRepository $repository, protected  FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(5,['translations']);

    }

    public function store(OurgradRequest $request)
    {

        $data=request()->all();
        //        $data['active']=$data['active'] ?? false;
        $data['image']=$this->fileUploadService
            ->uploadFile($request->image,'ourgrad');

        $model= $this->repository->save($data,new OurgradModel());

        self::ClearCached();
        return $model;
    }

    public function update($model, OurgradRequest $request)
    {
        $data=request()->all();
        if($request->has('image')){
            $data['image']=$this->fileUploadService
                ->replaceFile($request->image,$model->image,'ourgrad');
        }
//        $data['active']=$data['active'] ?? false;

        $model=$this->repository->save($data, $model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        $this->fileUploadService->removeFile($model->image);
        return $this->repository->delete($model);
    }

    public function CachedOurgrad()
    {
        return Cache::rememberForever('ourgrad',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('ourgrad');
    }
}
