@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mt-2">Bütün Mesajlar</h3>
                    </div>
                    @if(count($contacts) > 0)
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="text-center">
                                <tr>
                                    <th>Ad</th>
                                    <th>Əməliyyatlar</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{$contact->name}}</td>
                                        <td>
                                            <a href="{{route('dashboard.contact.view',$contact->id)}}" class="btn btn-secondary ml-2"><i class="fas fa-eye"></i></a>
                                            <a href="{{route('dashboard.contact.delete',$contact->id)}}" class="btn btn-danger ml-2"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="card-body">
                            <div class="col-xl-3 mx-auto">
                                <span class="alert alert-danger"> Mesaj Yoxdur</span>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </div>
@endsection
