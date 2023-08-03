@extends('admin.master')
@section('title','dashboard')
@section('page_title','Movie Seetings')
@section('body')
    <div class="container-md">
        <div class="row my-3">
            <div class="col-md-4">
                <a href="{{ url('admin/dashboard/movie/slider/index') }}">
                    <div class="card">
                        <div class="container-box">
                            <div class="icon">
                                <span class="material-symbols-sharp">sliders</span>
                            </div>
                            <div class="text">
                                <h3>Slider</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{url('admin/dashboard/movie/settngs/screen/index')}}">
                    <div class="card">
                        <div class="container-box">
                            <div class="icon">
                                <span class="material-symbols-sharp">attach_money</span>
                            </div>
                            <div class="text">
                                <h3>Payment</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="">
                    <div class="card">
                        <div class="container-box">
                            <div class="icon">
                                <span class="material-symbols-sharp">lab_profile</span>
                            </div>
                            <div class="text">
                                <h3>Site settings</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection