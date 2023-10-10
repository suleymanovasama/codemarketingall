@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper mt-1">
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">İdarəetmə</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse"> <i class="fas fa-minus"></i> </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove"> <i class="fas fa-times"></i> </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 20%"> {{ auth()->user()->name_surname }}</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>
    <div class="d-flex justify-content-center">
        <img src="{{asset('frontend/img/main/pngpng%201.png')}}">
    </div>
</div>
@endsection
