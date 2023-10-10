@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content mt-5">
            <div class="col-md-12">
                <div class="card card-danger">
                    <form>
                        <div class="card-body">
                            @if($contact->name)
                            <div class="form-group">
                                <label for="exampleInputTitle1">Ad</label>
                                <input value="{{$contact->name}}" type="text" class="form-control" id="exampleInputTitle1" disabled>
                            </div>
                            @endif
                            @if($contact->program)
                            <div class="form-group">
                                <label for="exampleInputTitle1">Proqram</label>
                                <input value="{{$contact->program}}" type="text" class="form-control" id="exampleInputTitle1" disabled>
                            </div>
                            @endif
                            @if($contact->phone)
                            <div class="form-group">
                                <label for="exampleInputTitle1">Telefon</label>
                                <input value="{{$contact->phone}}" type="text" class="form-control" id="exampleInputTitle1" disabled>
                            </div>
                            @endif
                            @if($contact->email)
                            <div class="form-group">
                                <label for="exampleInputTitle1">Elektron Poçt</label>
                                <input value="{{$contact->email}}" type="text" class="form-control" id="exampleInputTitle1" disabled>
                            </div>
                            @endif
                            @if($contact->message)
                            <div class="form-group">
                                <label for="exampleInputTitle1">Mesaj</label>
                                <textarea class="form-control" disabled>{{$contact->message}}</textarea>
                            </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
