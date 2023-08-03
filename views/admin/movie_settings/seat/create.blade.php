@extends('admin.master')
@section('title','seat create')
@section('page_title','Create Seat')
@php
use App\Components\Form;
// dd(seatrow());
@endphp
@section('body')
<div class="container-md">
    <div class="row">
        <div class="col-md-8 mt-3">
            <a href="{{url('admin/dashboard/movie/settngs/seatrow/index')}}" class="btn btn-success">back <i class="fa-solid fa-backward"></i></a>
        </div>
        <div class="col-md-6 m-auto">
            @include('message.message')
            <form action="{{ url('admin/dashboard/movie/settngs/seat/store') }}" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        {{Form::formgroup('Seat Name','text','seat_name','','',old('seat_name'))}}
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Select Row</label>
                            <select name="row_id" id="" class="form-control">
                                <option value="">select one</option>
                                @foreach (seatrow() as $rows)
                                       <?php $rows = obj($rows); ?>
                                    <option value="{{$rows->id}}">{{$rows->row_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Select Column</label>
                            <select name="column_id" id="" class="form-control">
                                <option value="">select one</option>
                                @foreach (seatcolumn() as $rows)
                                       <?php $rows = obj($rows); ?>
                                    <option value="{{$rows->id}}">{{$rows->column_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Select Show</label>
                            <select name="show_code" id="" class="form-control">
                                <option value="">select one</option>
                                @foreach (show() as $rows)
                                       <?php $rows = obj($rows); ?>
                                    <option value="{{$rows->id}}">{{$rows->show_name}}</option>
                                @endforeach
                               
                            </select>
                        </div>
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

