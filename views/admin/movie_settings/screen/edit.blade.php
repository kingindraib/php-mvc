@extends('admin.master')
@section('title','dashboard')
@section('page_title','Screen Management')
@php
use App\Components\Form;
// dd(screen_name($data['threator_code'])->screen_name);
// dd($data);
@endphp
@section('body')
<div class="container-md">
    <div class="row">
        <div class="col-md-8 mt-3">
            <a href="{{url('admin/dashboard/movie/settngs/screen/index')}}" class="btn btn-success">back <i class="fa-solid fa-backward"></i></a>
        </div>
        <div class="col-md-6 m-auto">
            @include('message.message')
            <form action="{{ url('admin/dashboard/movie/settngs/screen/update'.$data['id']) }}" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        {{Form::formgroup('Screen Name','text','screen_name','','',$data['screen_name'])}}
                    </div>
                    <div class="col-md-12">
                        {{Form::formgroup('Rows','text','seat_rows','','',$data['seat_rows'])}}
                    </div>
                    <div class="col-md-12">
                        {{Form::formgroup('Columns','text','seat_columns','','',$data['seat_columns'])}}
                    </div>
                    <div class="col-md-12">
                        <label for="">Select Threator</label>
                        <select name="threator_code" id="" class="form-control my-2" required>
                            <option value="{{$data['threator_code']}}">{{ threator_code($data['threator_code'])->threator_name }}</option>
                            @foreach (threator() as $item)
                                <option value="{{ $item['threator_code'] }}">{{ $item['threator_name'] }}</option>
                            @endforeach
                        </select>
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