@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profilim</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Əsas</a></li>
              <li class="breadcrumb-item active">Profilim</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="col-xl-9 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h1> Profil Məlumatları</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.profile.post') }}" method="post">
                            <div class="row">
                                @csrf
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <input type="text" value="{{ $profile->name_surname}}" class="form-control" name="name_surname" placeholder="Ad Soyad">
                                        @error('name_surname')<span class="text-danger">{{$message}}</span>@enderror
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <input type="email" value="{{ $profile->email }}" class="form-control" name="email" placeholder="Elektron Poçt">
                                        @error('email')<span class="text-danger">{{$message}}</span>@enderror
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <input type="password" class="form-control" name="password" placeholder="Şifrə">
                                        @error('password')<span class="text-danger">{{$message}}</span>@enderror
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Təkrar Şifrə">
                                        @error('password_confirmation')<span class="text-danger">{{$message}}</span>@enderror
                                    </div>
                                    <div class="float-right mt-3 mr-3">
                                        <button class="btn btn-primary">Yadda Saxla</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
@endsection
