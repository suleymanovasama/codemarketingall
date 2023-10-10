@extends('admin.layouts.app',['title'=>'Our grads'])

@section('content')

    <?php $routeName='admin.ourgrad' ?>
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
                                            <label>Ad Soyad ({{$langKey}})</label>
                                            <input type="text"
                                                   placeholder="Ad Soyad {{$langKey}}"
                                                   name="{{$langCode}}[title]"
                                                   value="{{old("$langCode.title",isset($model) ? ($model->translateOrDefault($langKey)->title ?? '') : '')}}"
                                                   class="form-control">
                                            @error("$langCode.title")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label> Peşəsi vəzifəsi ({{$langKey}})</label>
                                            <input type="text"
                                                   placeholder="title {{$langKey}}"
                                                   name="{{$langCode}}[text]"
                                                   value="{{old("$langCode.text",isset($model) ? ($model->translateOrDefault($langKey)->text ?? '') : '')}}"
                                                   class="form-control">
                                            @error("$langCode.text")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>İş yeri ({{$langKey}})</label>
                                            <input type="text"
                                                   placeholder="iş yeri {{$langKey}}"
                                                   name="{{$langCode}}[text2]"
                                                   value="{{old("$langCode.text2",isset($model) ? ($model->translateOrDefault($langKey)->text2 ?? '') : '')}}"
                                                   class="form-control">
                                            @error("$langCode.text2")
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
