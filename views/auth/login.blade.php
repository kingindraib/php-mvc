@extends('home.master')
@section('title','login')
@section('body')
@php
use App\Components\Form;
// print_r(session_message('errors'));
// echo "<br>";
// print_r(get_message('errors','message'));
@endphp

<div class="container-md">
	<div class="row mt-4">
		<div class="col-md-5 m-auto">
		   <div class="card">
			<h1 class="text-center my-2">Login</h1>
			@include('message.message')
			<form action="{{url('login/submit')}}" method="POST">
				<div class="row">
				   <div class="col-md-12">
					{{Form::formgroup('Email','email','email','','','')}}
				   </div>
				   <div class="col-md-12">
					{{Form::formgroup('Password','password','password','pass','','')}}
				   </div>
				   {{unset_session('errors')}}
				   <div class="col-md-6">
					{{-- {{Form::button('Login','submit','login','','btn btn-success w-100 mt-2')}}	    --}}
					<button class="btn btn-success w-100 mt-2">login</button>
				   </div>
				   <div class="col-md-6 text-right mt-4">
					<a href="{{ url('register') }}" class="register_section">Register Now</a>
				   </div>
				   <div class="col-md-6 text-center m-auto mt-4">
					<a href="" class="register_section">Forget Password ?</a>
				   </div>
				</div>
			</form>
		   </div>
		</div>
	</div>
</div>

@endsection
