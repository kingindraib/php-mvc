@extends('home.master')
@section('title','Archive Page')
@section('body')
<div class="container-md">
    <div class="row mt-2">
        <div class="col-md-8 m-auto">
            @isset($data->title)
                <h1 class="text-center">{{$data->title}}</h1>
            @endisset

            @isset($data->image)
           <img src="{{ url($data->image) }}" alt="" class="img-fluid">
            @endisset
            @isset($data->description)
            <p>{!! $data->description !!}</p>
            @endisset

        </div>
    </div>
</div>
@endsection