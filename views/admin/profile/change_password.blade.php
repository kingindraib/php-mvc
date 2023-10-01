@extends('admin.master')
@section('title','Change Password')
@section('page_title','Dashboard')
@section('body')
@php
use App\Components\Form;
@endphp

    <div class="container-md">
        <div class="row my-3">
            <div class="col-md-6 m-auto">
                @include('message.message')
			    <form action="{{url('admin/dashboard/profile/update_password')}}" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                        {{Form::formgroup('Old Password','password','old_password','','','')}}
                        </div>
                        <div class="col-md-12">
                            {{Form::formgroup('New Password','text','password','','','')}}
                        </div>
                        <div class="col-md-12">
                            {{Form::formgroup('Confirm Password','text','confirm_password','','','')}}
                        </div>
                        {{unset_session('errors')}}
                        <div class="col-md-12">
                            <button class="btn btn-danger" name="status" value="update">Change Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection