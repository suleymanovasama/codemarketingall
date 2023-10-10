@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content mt-5">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Yeni Parametr</h3>
                    </div>
                    <form action="{{route('dashboard.setting.store')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputTitle1">Başlıq</label>
                                <textarea name="title" type="text" class="form-control"  placeholder="Başlığı daxil edin"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputTitle1">Açar Söz</label>
                                <input name="key" type="text" class="form-control" id="exampleInputTitle1" placeholder="Açar Sözü daxil edin">
                                @error('key')<span class="text-danger">{{$message}}</span>@enderror
                            </div>
                        </div>
                        <div class="float-right">
                            <button type="submit" class="btn btn-primary mr-2 mb-2">Yadda Saxla</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection