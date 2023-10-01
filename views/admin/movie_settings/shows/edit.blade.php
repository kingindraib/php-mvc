@extends('admin.master')
@section('title','dashboard')
@section('page_title','Show Management')
@php
use App\Components\Form;
@endphp

@section('body')
<div class="container-md">
    <div class="row">
        <div class="col-md-8 mt-3">
            <a href="{{url('admin/dashboard/movie/settngs/show/index')}}" class="btn btn-success">back <i class="fa-solid fa-backward"></i></a>
        </div>
        <div class="col-md-6 m-auto">
            @include('message.message')
            <form action="{{ url('admin/dashboard/movie/settngs/show/store') }}" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        {{Form::formgroup('Show Name','text','show_name','','',$data->show_name)}}
                    </div>
                    <div class="col-md-12">
                        {{Form::formgroup('show prize','text','show_prize','','',$data->show_prize)}}
                    </div>
                    <div class="col-md-12">
                        {{Form::formgroup('offer prize','text','offer_prize','','',$data->offer_prize)}}
                    </div>
                    <div class="col-md-12">
                        {{Form::formgroup('show time','time','show_time','','',$data->show_time)}}
                    </div>
                    <div class="col-md-12">
                        {{Form::formgroup('show duretion','text','show_duration','','',$data->show_duration)}}
                    </div>
                    <div class="col-md-12">
                        {{validation_message('errors','screen_code')}}
                        <label for="">Screen Name</label>
                       <select name="screen_code" id="" class="form-control mb-3">
                        <option value="{{ $data->screen_code }}">{{ screen_code($data->screen_code)->screen_name  }}</option>
                        @foreach(screen() as $screen)
                        <option value="{{$screen['screen_code']}}">{{ $screen['screen_name'] }}</option>
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