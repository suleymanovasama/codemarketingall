<?php

namespace App\Services\RepositoryService;
use App\Http\Requests\Logo;
use App\Models\Homeimg;
use App\Repositories\HomeimgRepository;
use App\Repositories\LogoRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class HomeimgService
{
    public function __construct(protected HomeimgRepository $repository,
                                protected  FileUploadService $fileUploadService)
    {
        $this->fileUploadService = $fileUploadService;
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(10);
    }

    public function store($request)
    {
        $data=$request->all();

        $data['image']=$this->fileUploadService
            ->uploadFile($request->image,'homeimg');

//        $data['active']=$data['active'] ?? false;

        $model= $this->repository->save($data,new Homeimg());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('image')){
            $data['image']=$this->fileUploadService
                ->replaceFile($request->image,$model->image,'homeimg');
        }

//        $data['active']=$data['active'] ?? false;

        $model=$this->repository->save($data,$model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        $this->fileUploadService->removeFile($model->image);
        return $this->repository->delete($model);
    }

    public function CachedHomeimg()
    {
        return Cache::rememberForever('homeimg',
            function (){
                return $this->repository->all();
            });
    }

    public static function ClearCached()
    {
        Cache::forget('homeimg');
    }

}
