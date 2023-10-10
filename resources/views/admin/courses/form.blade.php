@extends('admin.layouts.app',['title'=>'Courses'])

@section('content')

    <?php $routeName='admin.courses' ?>
    <div class="card" style="left:252px">

        <div class="card-body">
            <form action="{{ isset($model) ? route($routeName.'.update',$model->id) :  route($routeName.'.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @isset($model)
                    @method('PUT')
                @endisset

                <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                            <li class="pt-2 px-3"><h3 class="card-title">Title</h3></li>
                            @foreach(config('app.langs') as $langCode=> $langKey)
                                <li class="nav-item">
                                    <a class="nav-link{{$loop->first ? ' active' : ''}}"
                                       id="custom-tabs-{{$langCode}}-tab"
                                       data-toggle="pill"
                                       href="#title-{{$langCode}}"
                                       role="tab"
                                       aria-controls="custom-tabs-two-home"
                                       aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                                    >
                                        {{\Illuminate\Support\Str::upper($langKey)}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            @foreach(config('app.langs') as $langCode=>$langKey)
                                <div class="tab-pane fade{{ $loop->first ? ' show active' : '' }}"
                                     id="title-{{$langCode}}"

                                     role="tabpanel"
                                     aria-labelledby="custom-tabs-{{$langCode}}-tab"
                                >
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Kursun adı ({{$langKey}})</label>
                                            <input type="text"
                                                   placeholder="Kursun adı {{$langKey}}"
                                                   name="{{$langCode}}[name]"
                                                   value="{{old("$langCode.name",isset($model) ? ($model->translateOrDefault($langKey)->name ?? '') : '')}}"
                                                   class="form-control">
                                            @error("$langCode.name")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label> Kursun açıqlaması ({{$langKey}})</label>
                                            <input type="text"
                                                   placeholder="kursun açıqlaması {{$langKey}}"
                                                   name="{{$langCode}}[caption]"
                                                   value="{{old("$langCode.caption",isset($model) ? ($model->translateOrDefault($langKey)->caption ?? '') : '')}}"
                                                   class="form-control">
                                            @error("$langCode.caption")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label> Kursun linki ({{$langKey}})</label>
                                            <input type="text"
                                                   placeholder="link {{$langKey}}"
                                                   name="{{$langCode}}[link]"
                                                   value="{{old("$langCode.link",isset($model) ? ($model->translateOrDefault($langKey)->link ?? '') : '')}}"
                                                   class="form-control">
                                            @error("$langCode.link")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Full-time text ({{$langKey}})</label>
                                            <input type="text"
                                                   placeholder="Full text {{$langKey}}"
                                                   name="{{$langCode}}[full_text]"
                                                   value="{{old("$langCode.full_text",isset($model) ? ($model->translateOrDefault($langKey)->full_text ?? '') : '')}}"
                                                   class="form-control">
                                            @error("$langCode.full_text")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="form-group col-4">
                        @isset($model->image)
                            <img src="{{asset('storage/'.$model->image)}}"
                                 class="object-fit-cover" width="100px" height="120px"
                            >
                        @endisset
                        <div>
                            <label>Image</label>
                            <input type="file"  name="image" class="form-control">
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                </div>

                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>


@endsection
