@extends('home.master')
@section('title','User Dashboard')
@section('body')

<div class="container-md">
    <div class="row mt-4">
        @include('home.account.sidebar')
        <div class="col-md-9">
            <div class="brandcamp">
                <h1>@yield('dash_title')</h1>
            </div>
            <div class="row" id="userdashboard">
                @yield('user_account_body')
            </div>
        </div>
    </div>
</div>


@endsection