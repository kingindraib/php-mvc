@extends('admin.master')
@section('title','seat update')
@section('page_title','update Seat')
@php
use App\Components\Form;
// dd(seatrow());
@endphp
@section('body')
<div class="container-md">
    <div class="row">
        <div class="col-md-8 mt-3">
            <a href="{{url('admin/dashboard/movie/settngs/seat/index')}}" class="btn btn-success">back <i class="fa-solid fa-backward"></i></a>
        </div>
        <div class="col-md-6 m-auto">
            @include('message.message')
            <form action="{{ url('admin/dashboard/movie/settngs/seat/update/'.$data->id) }}" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        {{Form::formgroup('Seat Name','text','seat_name','','',$data->seat_name)}}
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Select Row</label>
                            <select name="row_id" id="" class="form-control">
                                <option value="{{ $data->row_id }}">{{ seat_row($data->row_id)->row_name }}</option>
                                @foreach (seatrow() as $rows)
                                       <?php $rows = obj($rows); ?>
                                       @if($data->row_id !== $rows->id)
                                    <option value="{{$rows->id}}">{{$rows->row_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Select Column</label>
                            <select name="column_id" id="" class="form-control">
                                <option value="{{ $data->column_id }}">{{ seat_column($data->column_id)->column_name }}</option>
                                @foreach (seatcolumn() as $columns)
                                       <?php $columns = obj($columns); ?>
                                       @if($data->column_id !== $columns->id)
                                    <option value="{{$columns->id}}">{{$columns->column_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Select Screen</label>
                            <select name="screen_id" id="" class="form-control">
                                <option value="{{ $data->screen_id }}">{{ screen_name($data->screen_id)->screen_name }}</option>
                                @foreach (screen() as $screen)
                                       <?php $screen = obj($screen); ?>
                                       @if($data->screen_id !== $screen->id)
                                    <option value="{{$screen->id}}">{{$screen->screen_name}}</option>
                                    @endif
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

