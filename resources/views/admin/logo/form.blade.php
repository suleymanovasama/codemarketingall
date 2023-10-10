@extends('admin.layouts.app',['title'=>'Logolar'])

@section('content')

    <?php $routeName='admin.logo' ?>
    <div class="card" style="left:252px">

        <div class="card-body">
            <form action="{{ isset($model) ? route($routeName.'.update',$model->id) :  route($routeName.'.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @isset($model)
                    @method('PUT')
                @endisset
                <div class="row">

                    <div class="form-group col-4">
                        @isset($model->image)
                            <img src="{{asset('storage/'.$model->image)}}"
                                 class="object-fit-cover" width="100px" height="120px"
                            >
                        @endisset
                        <div>
                            <label>Image</label>
                            <input type="file"  name="image" class="form-control">
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                </div>

                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>


@endsection
