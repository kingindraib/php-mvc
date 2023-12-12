@extends('admin.master')
@section('title','Site Settings')
@section('page_title','Site Settings')
@php
use App\Components\Form;
@endphp
@section('body')
<div class="container-md">
    <div class="row">
        <div class="col-md-8 mt-3">
            <a href="{{url('admin/dashboard/sitesettings/index')}}" class="btn btn-success">back <i class="fa-solid fa-backward"></i></a>
        </div>
        <div class="col-md-10 m-auto">
            @include('message.message')
            <form action="{{ url('admin/dashboard/sitesettings/store') }}" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        {{Form::formgroup('Site Title','text','site_title','','',$data['site_title'])}}
                    </div>
                    <div class="col-md-6 my-2">
                        <label for="">Logo</label>
                        <input class="form-control" type="file" id="" onchange="imagepreview()" name="logo">
                        @if(!empty($data['logo']))
                        <img id="imagepriview" src="{{url($data['logo'])}}" class="ib-img" width="100%">
                    @endif
                        <img id="imagepriview" src="" class="ib-img" width="100%">
                    </div>
                    <div class="col-md-6">
                        {{Form::formgroup('Tagline','text','tagline','','',$data['tagline'])}}
                    </div>
                    <div class="col-md-6 my-2">
                        <label for="">fabicon</label>
                        <input class="form-control" type="file" id="" onchange="fabconPreview()" name="favicon">
                        @if(!empty($data['favicon']))
                            <img id="fabconPreview" src="{{url($data['favicon'])}}" class="ib-img" style="width: 200px">
                        @endif
                        <img id="fabconPreview" src="" class="ib-img" width="100%">
                    </div>

                 
                    {{unset_session('old')}}
                    {{unset_session('errors')}}
                    <div class="col-md-12">
                        <button class="btn btn-danger" name="status" value="draft">Update</button>
                        {{-- <button class="btn btn-success" name="status" value="publish">Publish</button> --}}
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
            imagepriview.src = URL.createObjectURL(event.target.files[0]);
        }
    function fabconPreview() {
        fabconPreview.src = URL.createObjectURL(event.target.files[0]);
        }
</script>
@endpush