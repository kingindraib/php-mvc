@extends('admin.master')
@section('title','Faq Management')
@section('page_title','Faq Category')
@php
use App\Components\Form;
@endphp
@section('body')
<div class="container-md">
    <div class="row">
        <div class="col-md-8 mt-3">
            <a href="{{url('admin/dashboard/faq/index')}}" class="btn btn-success">back <i class="fa-solid fa-backward"></i></a>
        </div>
        <div class="col-md-12 m-auto">
            @include('message.message')
            <form action="{{ url('admin/dashboard/faq/store') }}" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-8">
                        {{Form::formgroup('Question','text','question','','',$data->question)}}
                    </div>
                    <div class="col-md-12">
                       <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="">Answer</label>
                                <textarea name="answer" id="editor" cols="30" rows="10" class="form-control">{{ $data->answer }}</textarea>
                            </div>
                        </div>
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