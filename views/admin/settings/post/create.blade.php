@extends('admin.master')
@section('title','Post Management')
@section('page_title','Post Category')
@php
use App\Components\Form;
@endphp
@section('body')
<div class="container-md">
    <div class="row">
        <div class="col-md-8 mt-3">
            <a href="{{url('admin/dashboard/post_management/index')}}" class="btn btn-success">back <i class="fa-solid fa-backward"></i></a>
        </div>
        <div class="col-md-12 m-auto">
            @include('message.message')
            <form action="{{ url('admin/dashboard/post_management/store') }}" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-8">
                        {{Form::formgroup('Post Title','text','title','','',old('title'))}}
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Select Category</label>
                            <select name="category_id" id="" class="form-control" required>
                                <option value="">Select One</option>
                                @foreach(getCategory() as $category)
                                <option value="{{ $category['id'] }}">{{ $category['category_name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                       <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" id="editor" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                                <input class="form-control" type="file" id="" onchange="imagepreview()" name="image">
                                <img id="imagepriview" src="" class="ib-img" width="100%">
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