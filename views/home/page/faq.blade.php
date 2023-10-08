@extends('home.master')
@section('title','Archive Page')
@section('body')
<div class="container-md">
    @forelse($faq as $data)
    <div class="row">
        <div class="col-md-8 m-auto">
            <h2>{{ $data['question'] }}</h2>
        </div>
        <div class="col-md-8 m-auto">
            <p>{!! $data['answer'] !!}</p>
        </div>
    </div>
    @empty 
    <div class="row">
        <h1>No Data Found</h1>
    </div>
    @endforelse
</div>
@endsection