<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CoursesRequest;
use App\Models\CoursesModel;
use App\Services\RepositoryService\CoursesService;

class CoursesController extends Controller
{
    public function __construct(protected CoursesService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();

        return view('admin.courses.index',['models'=>$models]);
    }

    public function create(CoursesService $coursesService)
    {
        $courses=$coursesService->CachedCourses();
        return view('admin.courses.form', ['courses'=>$courses]);
    }
    public function store(CoursesRequest $request, CoursesModel $model)
    {
        $this->service->store($request);
        return redirect()->route('admin.courses.index');
    }

    public function edit(CoursesModel $courses,CoursesService $coursesService)
    {
        $courses=$coursesService->CachedCourses();
        return view('admin.courses.form',['model'=>$courses,'courses'=>$courses]);
    }

    public function update(CoursesModel $courses,CoursesRequest $request)
    {

        $this->service->update($courses, $request);


        return redirect()->back();
    }
    public function destroy(CoursesModel $courses)
    {
        $this->service->delete($courses);
        return redirect()->back();
    }
}
