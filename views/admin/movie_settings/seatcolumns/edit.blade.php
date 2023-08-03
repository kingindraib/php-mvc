@extends('admin.master')
@section('title','dashboard')
@section('page_title','SeatColumn Management')
@php
use App\Components\Form;
@endphp
@section('body')
<div class="container-md">
    <div class="row">
        <div class="col-md-8 mt-3">
            <a href="{{url('admin/dashboard/movie/settngs/seatrow/index')}}" class="btn btn-success">back <i class="fa-solid fa-backward"></i></a>
        </div>
        <div class="col-md-6 m-auto">
            @include('message.message')
            <form action="{{ url('admin/dashboard/movie/settngs/seatcolumn/update'.$data['id']) }}" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        {{Form::formgroup('Row Name','text','column_name','','',$data['column_name'])}}
                    </div>
                    {{unset_session('old')}}
                    {{unset_session('errors')}}
                    <div class="col-md-12">
                        <button class="btn btn-danger" name="status" value="draft">Draft</button>
                        <button class="btn btn-success" name="status" value="publish">Publish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection