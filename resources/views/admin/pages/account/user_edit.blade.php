@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content mt-5">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">{{ $user->id }} İD-li İstifadəçi</h3> </div>
                    <form method="post" action="{{ route('dashboard.user.update',$user->id) }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ $user->name_surname }}" name="name_surname" placeholder="Ad Soyad">
                                @error('name_surname')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" value="{{$user->email }}" name="email" placeholder="E-poçt">
                                @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Şifrə">
                                @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="repassword" placeholder="Təkrar Şifrə">
                                @error('repassword')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="float-right">
                            <button type="submit" class="btn btn-primary mb-2 mr-3">Yadda Saxla</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
