<?php

namespace App\Services\RepositoryService;

use App\Http\Requests\CoursesRequest;
use App\Models\CoursesModel;
use App\Repositories\CoursesRepository;

use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class CoursesService
{
    public function __construct(protected CoursesRepository $repository, protected  FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(5,['translations']);

    }

    public function store(CoursesRequest $request)
    {

        $data=request()->all();
        //        $data['active']=$data['active'] ?? false;
        $data['image']=$this->fileUploadService
            ->uploadFile($request->image,'ourgrad');

        $model= $this->repository->save($data,new CoursesModel());

        self::ClearCached();
        return $model;
    }

    public function update($model, CoursesRequest $request)
    {
        $data=request()->all();
        if($request->has('image')){
            $data['image']=$this->fileUploadService
                ->replaceFile($request->image,$model->image,'courses');
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
    public function CachedCourses()
    {
        return Cache::rememberForever('courses',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }
    public static function ClearCached()
    {
        Cache::forget('courses');
    }


}
