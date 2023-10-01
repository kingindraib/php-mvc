@extends('home.master')
@section('title',$movie_name)
@section('body')

    <!-- page section start -->
    <div class="container-md">
        <div class="row">
            <div class="col-md-6">
                <div class="section_title">
                    <h2 class="my-4 heading_1">Movie Detail</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                {{-- <img src="images/image 1.png" alt="" class="img-fluid"> --}}
                @if(!$data->image==NULL)
                <img src="{{url($data->image)}}" alt="{{$data->movie_name}}" class="img-fluid">
                @endif
            </div>
            <div class="col-md-8">
                <h1 class="movie_title"><span class="">Title : </span> {{ $data->movie_name }}</h1>
                <p class="movie_description"><span class="title_span">Description :</span> {{ $data->description }}</p>
				<p class="movie_description"><span class="title_span">Director: </span>
                    @foreach(movie_director($data->id) as $director)
                    <?php $director = obj($director); ?>
                     {{$director->director_name }} ,&nbsp;
                     @endforeach
                </p>
				<p class="movie_description"><span class="title_span">Cast: </span>
                    @foreach(movie_cast($data->id) as $movie_cast)
                    {{ obj($movie_cast)->cast_name }} ,&nbsp;
                    @endforeach
                </p>
				<p class="movie_description"><span class="title_span">Producer: </span>
                    @foreach(movie_producer($data->id) as $prodecure)
                    {{ obj($prodecure)->producers_name }} ,&nbsp;
                    @endforeach
                </p>
				<p class="movie_description"><span class="title_span">Distributor: </span>
                  {{ movie_distributor($data->distributor_code)->distributor_name }}
                </p>
				<p class="movie_description"><span class="title_span">Production: </span> {{ $data->production_house }} </p>	
            </div>
        </div>
    </div>
    <!-- page section stop -->
	<!-- ticket system enabel start -->
	<div class="container-md">
		<div class="row">
			<div class="col-md-4">
				<div class="section_title">
					<h2 class="my-4 heading_1">Show Schedule</h2>
				</div>
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6"></div>
					<div class="col-md-6">
						<ul class="showtypes">
							<li class="text-white bg-success">Available</li>
							<li class="bg-warning text-white">Fast filling</li>
							<li class="bg-danger text-white">Slod out</li>
							<li class="bg-secondary text-white">Expired</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- audritimu -->
		@forelse(movie_screen($data->id) as $moviescreen)
		<?php $moviescreen = obj($moviescreen); ?>
		<div class="row">
			<div class="col-md-3">
				<div class="aud_box">
					<h5>{{ screen_name($moviescreen->screen_id)->screen_name }}</h5>
				</div>
			</div>
			<div class="col-md-9">
				<ul class="audlist_time">
					@foreach(movie_show($data->id) as $movieshow)
					<?php $movieshow = obj($movieshow);
					// dd(show_seat($movieshow->shows_id));
					// dd(screen_name($moviescreen->screen_id)->screen_code);
					?>
						{{-- @foreach(show_seat($movieshow->shows_id) as $showSeat) --}}
						@if(show_name($movieshow->shows_id)->screen_code == screen_name($moviescreen->screen_id)->screen_code)
							<li><a href="{{ url('single/seat/'.$movieshow->id) }}" class="btn btn-outline-success">{{ show_name($movieshow->shows_id)->show_time }}</a></li>
							@endif
							{{-- @endforeach --}}
					@endforeach
					{{-- <li><a href="#" class="btn btn-outline-success">8:00 AM</a></li>
					<li><a href="#" class="btn btn-outline-success">11:00 AM</a></li>
					<li><a href="#" class="btn btn-outline-warning">2:00 PM</a></li>
					<li><a href="#" class="btn btn-outline-warning">5:00 PM</a></li>
					<li><a href="#" class="btn btn-outline-success">8:00 PM</a></li>
					<li><a href="#" class="btn btn-outline-success">11:00 PM</a></li> --}}
				</ul>
			</div>
		</div>
		@empty 
		<div class="row">
			<div class="col-md-12">
				No Data Found
			</div>
		</div>
		@endforelse
		{{-- <div class="row">
			<div class="col-md-3">
				<div class="aud_box">
					<h5>Aud 1</h5>
				</div>
			</div>
			<div class="col-md-9">
				<ul class="audlist_time">
					<li><a href="#" class="btn btn-outline-danger">5:00 AM</a></li>
					<li><a href="#" class="btn btn-outline-success">8:00 AM</a></li>
					<li><a href="#" class="btn btn-outline-success">11:00 AM</a></li>
					<li><a href="#" class="btn btn-outline-warning">2:00 PM</a></li>
					<li><a href="#" class="btn btn-outline-warning">5:00 PM</a></li>
					<li><a href="#" class="btn btn-outline-success">8:00 PM</a></li>
					<li><a href="#" class="btn btn-outline-success">11:00 PM</a></li>
				</ul>
			</div>
		</div> --}}
	</div>
	<!-- ticket system enabel stop -->

@endsection