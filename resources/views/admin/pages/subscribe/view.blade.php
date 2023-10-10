@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content mt-5">
            <div class="col-md-12">
                <div class="card card-danger">
                    <form>
                        <div class="card-body">
                            @if($subscribe->program)
                            <div class="form-group">
                                <label for="exampleInputTitle1">Proqram</label>
                                <input value="{{$subscribe->program}}" type="text" class="form-control" id="exampleInputTitle1" disabled>
                            </div>
                            @endif
                            @if($subscribe->phone)
                            <div class="form-group">
                                <label for="exampleInputTitle1">Telefon</label>
                                <input value="{{$subscribe->phone}}" type="text" class="form-control" id="exampleInputTitle1" disabled>
                            </div>
                            @endif
                            @if($subscribe->email)
                            <div class="form-group">
                                <label for="exampleInputTitle1">Elektron Poçt</label>
                                <input value="{{$subscribe->email}}" type="text" class="form-control" id="exampleInputTitle1" disabled>
                            </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
