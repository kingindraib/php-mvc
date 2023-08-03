@extends('admin.master')
@section('title','dashboard')
@section('page_title','Create Ditributor')
@section('body')
@php
use App\Components\Form;
@endphp

<div class="container-md">
    <div class="row my-3">
        <div class="col-md-8 m-auto">
            {{-- <h1 class="text-center my-2">Login</h1> --}}
			@include('message.message')
			<form action="{{url('admin/dashboard/distributor/store')}}" method="POST">
				<div class="row">
					<div class="col-md-12">
					{{Form::formgroup('Distributor Name','text','distributor_name','','','')}}
					</div>
					<div class="col-md-6">
					{{Form::formgroup('Email','email','email','','','')}}
					</div>
					<div class="col-md-6">
					{{Form::formgroup('Phone','text','phone','','','')}}
					</div>
				   <div class="col-md-6">
					{{Form::formgroup('Address','text','address','','','')}}
				   </div>
				   <div class="col-md-6">
					{{Form::formgroup('Website','url','website','','','')}}
				   </div>
				   {{unset_session('old')}}
				   {{unset_session('errors')}}
				   <div class="col-md-12">
					{{-- {{Form::button('Login','submit','login','','btn btn-success w-100 mt-2')}}	    --}}
					<button class="btn btn-success w-100 mt-2">Create</button>
				   </div>
				</div>
			</form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
	<script>
		$(document).ready(function(){
			$('#addcast').on('click',function(){
				$('#castfield').append('<div class="form-group">'+
							'<label for="">Cast <span class="btn-info px-2 my-1 cast-field">-</span></label>'+
							'<input type="text" class="form-control">'+
						'</div>');
			})

			$('#castfield').on('click', '.remove-cast', function() {
			// $(this).closest('.cast-field').remove();
				alert(true);
			});

		});


	</script>
	<script>
		function imagepreview() {
				// alert(true);
				imagepriview.src = URL.createObjectURL(event.target.files[0]);
			}
	</script>
@endpush