@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mt-2">Bütün Parametrlər</h3>
                        <div class="float-right mr-3">
                            <span >{{$settings->links()}}</span>
                        </div>
                    </div>
                    @if(count($settings) > 0)
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="text-center">
                                <tr>
                                    <th>İD</th>
                                    <th>Başlıq</th>
                                    <th>Açar Söz</th>
                                    <th>Foto</th>
                                    <th>Əməliyyatlar</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                @foreach($settings as $setting)
                                    <tr>
                                        <td>{{$setting->id}}</td>
                                        <td>{!! Str::limit(strip_tags(html_entity_decode($setting->title)), 20,' ...') !!} </td>
                                        <td>{{ $setting->key }}</td>
                                        <td>
                                            @if($setting->file)
                                            <a href="{{  asset('/'.$setting->file) }}" target="_blank"><img style="height: 50px;" src="{{ asset('/'.$setting->file) }}" alt=""></a>
                                            @else
                                            <i class="fa-solid fa-x"></i>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('dashboard.setting.edit',$setting->id)}}" class="btn btn-secondary ml-2"><i class="fas fa-edit"></i></a>
                                            <a href="{{route('dashboard.setting.delete',$setting->id)}}" class="btn btn-danger ml-2"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="card-body">
                            <div class="col-xl-3 mx-auto">
                                <span class="alert alert-danger"> Parametr əlavə edilməyib</span>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </div>
@endsection
