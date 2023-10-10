<?php

namespace App\Services\RepositoryService;
use App\Http\Requests\Logo;
use App\Models\LogoModel;
use App\Repositories\LogoRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class LogoService
{


    public function __construct(protected LogoRepository $repository,
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
            ->uploadFile($request->image,'logo_images');

        $data['active']=$data['active'] ?? false;

        $model= $this->repository->save($data,new LogoModel());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('image')){
            $data['image']=$this->fileUploadService
                ->replaceFile($request->image,$model->image,'logo_images');
        }

        $data['active']=$data['active'] ?? false;

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

    public function CachedLogo()
    {
        return Cache::rememberForever('logo_images',
            function (){
                return $this->repository->all();
            });
    }

    public static function ClearCached()
    {
        Cache::forget('logo_images');
    }

}
