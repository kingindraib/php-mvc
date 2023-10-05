@extends('home.account.dashboard_master')
@section('dash_title','Edit Detail')
@php
use App\Components\Form;
@endphp
@section('user_account_body')


       <div class="col-md-8">
            <form action="{{ url('user/dashboard/update_profile') }}" method="POST">
                <div class="col-md-12">
                    {{Form::formgroup('First Name','text','first_name','','',Auth()->first_name)}}
                </div>
                <div class="col-md-12">
                    {{Form::formgroup('Last Name','text','last_name','','',Auth()->last_name)}}
                </div>
                <div class="col-md-12">
                    {{Form::formgroup('Phone','text','phone','','',Auth()->phone)}}
                </div>
                <div class="col-md-12">
                    {{Form::formgroup('Date of Birth','text','birth','','',Auth()->birth)}}
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                       <button type="submit" class="btn btn-danger">Change</button>
                    </div>
                </div>
            </form>
       </div>


@endsection