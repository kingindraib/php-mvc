@extends('home.master')
@section('title','register')
@section('body')
@php
use App\Components\Form;
@endphp

<div class="container-md">
    <div class="row mt-4">
        <div class="col-md-5 m-auto">
           <div class="card">
            <h1 class="text-center my-2">Register</h1>
            @include('message.message')
            <form action="{{url('register/submit')}}" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        {{Form::formgroup('First Name','text','first_name','','',old('first_name'))}}
                    </div>
                    <div class="col-md-12">
                        {{Form::formgroup('Last Name','text','last_name','','',old('last_name'))}}
                    </div>
                    <div class="col-md-12">
                        {{Form::formgroup('Phone','phone','phone','','',old('phone'))}}
                    </div>
                   <div class="col-md-12">
                    {{Form::formgroup('Email','email','email','','',old('email'))}}
                   </div>
                   <div class="col-md-12">
                    {{Form::formgroup('Date of Birth','date','birth','','',old('birth'))}}
                   </div>
                   <div class="col-md-12">
                    {{Form::formgroup('Password','password','password','','','')}}
                   </div>
                   <div class="col-md-12">
                    {{Form::formgroup('Confirm Password','password','confirm_password','','','')}}
                   </div>
                   {{unset_session('old')}}
                   <div class="col-md-6">
                       <div class="form-group">
                        <button class="btn btn-success w-100 mt-2">Register</button>
                       </div>
                   </div>
                   <div class="col-md-6 text-right mt-4">
                    <a href="{{url('login')}}" class="register_section">Login Now</a>
                   </div>
                </div>
            </form>
           </div>
        </div>
    </div>
</div>
@endsection