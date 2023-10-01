@extends('admin.master')
@section('title','profile settings')
@section('page_title','Dashboard')
@section('body')
@php
use App\Components\Form;
@endphp

    <div class="container-md">
        <div class="row my-3">
            <div class="col-md-8 m-auto">
                @include('message.message')
			    <form action="{{url('admin/dashboard/profile/update/'.auth()->id)}}" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                        {{Form::formgroup('First Name','text','first_name','','',auth()->first_name)}}
                        </div>
                        <div class="col-md-6">
                            {{Form::formgroup('Last Name','text','last_name','','',auth()->last_name)}}
                        </div>
                        <div class="col-md-6">
                            {{Form::formgroup('Email','email','email','','',auth()->email)}}
                        </div>
                        <div class="col-md-6">
                            {{Form::formgroup('Phone','text','phone','','',auth()->phone)}}
                        </div>
                        <div class="col-md-6">
                            {{Form::formgroup('Date Of Birth','date','birth','','',auth()->birth)}}
                        </div>
                        <div class="col-md-6 mt-4">
                           <a href="{{ url('admin/dashboard/profile/change_password') }}" class="btn btn-info">Change Password</a>
                        </div>
                        {{unset_session('errors')}}
                        <div class="col-md-12">
                            <button class="btn btn-danger" name="status" value="update">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection