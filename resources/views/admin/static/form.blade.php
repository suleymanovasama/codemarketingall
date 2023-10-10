@extends('admin.layouts.app',['title'=>'Static words'])

@section('content')

    <?php $routeName='admin.static' ?>
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
                                            <label>Title ({{$langKey}})</label>
                                            <input type="text"
                                                   placeholder="title {{$langKey}}"
                                                   name="{{$langCode}}[title]"
                                                   value="{{old("$langCode.title",isset($model) ? ($model->translateOrDefault($langKey)->title ?? '') : '')}}"
                                                   class="form-control">
                                            @error("$langCode.title")
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
                    <div class="form-group col-3">
                        <label>Active</label>
                        <input type="checkbox" class="mt-4" name="active" value="1" @checked(old('active',$model->active ?? '')) >
                        @error('active')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>


@endsection
