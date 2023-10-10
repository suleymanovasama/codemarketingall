@extends('admin.layouts.app',['title'=>'Məzunlar və iş yerləri'])
@section('content')

    <div  class="content-wrapper mt-1">
    <?php  $routeName='admin.ourgrad' ?>
    <a class="btn btn-primary my-1" href="{{route($routeName.'.create')}}">Add</a>

    <br>

    <div class="card ">
        <div class="card-body">
            <table class="table table-bordered" style="text-align: center">
                <thead>
                <tr>
                    <th style="width: 10px">ID</th>
                    <th>İmage</th>
                    <th>Ad Soyad</th>
                    <th> Peşəsi Vəzifəsi</th>
                    <th>İş yeri</th>
                    <th style="width: 50px">Edit</th>
                    <th style="width: 50px">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($models  as $model)
                    <tr>
                        <td>{{$model->id}}</td>
                        <td style="width: 70px">
                            @isset($model->image)
                                <div class="form-group">
                                    <img src="{{asset('storage/'.$model->image)}}"
                                         class="object-fit-cover" width="70px" height="30px"                                    >
                                </div>
                            @endisset
                        </td>
                        <td>{{$model->title}}</td>
                        <td>{{$model->text}}</td>
                        <td>{{$model->text2}}</td>
                        <td>
                            <a href="{{route($routeName.'.edit',$model->id)}}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form class="delete-form" action="{{ route($routeName.'.destroy',$model->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>
            {{$models->links('pagination::bootstrap-4')}}
        </div>
    </div>
    </div>
@endsection
