@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mt-2">Bütün İstifadəçilər</h3>
                        <div class="float-right mr-3">
                            <span >{{$users->links()}}</span>
                        </div>
                    </div>
                    @if(count($users) > 0)
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="text-center">
                                <tr>
                                    <th>İD</th>
                                    <th>Ad Soyad</th>
                                    <th>E-poçt</th>
                                    <th>Status</th>
                                    <th>Əməliyyatlar</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name_surname}} </td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <div class="form-group">
                                                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                    <input type="checkbox" class="custom-control-input" id="{{$user->id}}" onchange="location.href=`{{route('dashboard.user.setstatus',$user->id)}}`" {{!$user->status ? : 'checked'}}>
                                                    <label class="custom-control-label" for="{{$user->id}}"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{route('dashboard.user.edit',$user->id)}}" class="btn btn-secondary ml-2"><i class="fas fa-edit"></i></a>
                                            <a href="{{route('dashboard.user.delete',$user->id)}}" class="btn btn-danger ml-2"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="card-body">
                            <div class="col-xl-3 mx-auto">
                                <span class="alert alert-danger"> İstifadəçi əlavə edilməyib</span>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </div>
@endsection
