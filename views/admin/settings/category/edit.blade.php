@extends('admin.master')
@section('title','Category Management')
@section('page_title','Create Category')
@php
use App\Components\Form;
@endphp
@section('body')
<div class="container-md">
    <div class="row">
        <div class="col-md-8 mt-3">
            <a href="{{url('admin/dashboard/category/index')}}" class="btn btn-success">back <i class="fa-solid fa-backward"></i></a>
        </div>
        <div class="col-md-6 m-auto">
            @include('message.message')
            <form action="{{ url('admin/dashboard/category/update/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        {{Form::formgroup('Category Name','text','category_name','','',$data->category_name)}}
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">IS Nav</label>
                            <select name="is_nav" id="" class="form-control">
                                @if($data->is_nav == 1)
                                <option value="1" selected>yes</option>
                                <option value="0">No</option>
                                @elseif($data->is_nav ==0)
                                <option value="0" selected>No</option>
                                <option value="1">yes</option>
                                @else
                                <option value="1">yes</option>
                                <option value="0">No</option>
                                @endif
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
@push('scripts')
<script>
    function imagepreview() {
            // alert(true);
            imagepriview.src = URL.createObjectURL(event.target.files[0]);
        }
</script>
@endpush