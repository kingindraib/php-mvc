@extends('home.master')
@section('title','home')
@section('body')

<section>
    <div class="container-main">
        <div class="owl-slider">
            <div class="owl-carousel owl-theme">
                @forelse ($slider as $slideritem)
                <?php $slideritem= obj($slideritem); ?>
                <div class="item owl_slider_items">
                    <img src="{{url($slideritem->image)}}" alt="{{ $slideritem->slider_name }}" class="owl_slider_img">
                </div>
                @empty
                    <div class="item owl_slider_items">
                        No Data Found
                    </div>
                @endforelse
               
                {{-- <div class="item owl_slider_items">
                    <img src="{{url('public/home/images/banner-2.png')}}" alt="" class="owl_slider_img">
                </div> --}}
            </div>
        </div>
    </div>
    
</section>

<!-- section now showing -->
<section id="section_now_showing" class="container-md">
    <div class="section_title">
        <h2 class="my-4 heading_1">Now Showing</h2>
        <input type="date">
    </div>
    <div class="section_content">
        <div class="row">
            @forelse($movie as $data)
            <?php $data = obj($data); ?>
            <div class="section_content_img col-md-4">
                @if(!$data->image==NULL)
                <img src="{{url($data->image)}}" alt="{{$data->movie_name}}" class="img-fluid">
                @endif
                <div class="overlay">
                    <div class="meta-data">
                        <div class="row">
                            <div class="col-md-5 movie_meta_1">
                                {{-- <img src="{{url('public/home/images/image 1.png')}}" alt="" class="overlay-img"> --}}
                                @if(!$data->image==NULL)
                                <img src="{{url($data->image)}}" alt="{{$data->movie_name}}" class="overlay-img">
                                @endif
                            </div>
                            <div class="col-md-6 movie_meta_2">
                                <h1 class="movie_title"><span>Title : </span> {{ $data->movie_name }}</h1>
                                <p><span>Type :</span> {{ $data->movie_type }}</p>
                                <p><span>Release Date :</span> {{ $data->release_date }}</p>
                            
                                <p><span>Director :</span>
                                    @foreach(movie_director($data->id) as $director)
                                    <?php $director = obj($director); ?>
                                     {{$director->director_name }} ,&nbsp;
                                     @endforeach
                                    </p>
                                <p><span>Cast :</span> 
                                    @foreach(movie_cast($data->id) as $movie_cast)
                                    {{ obj($movie_cast)->cast_name }} ,&nbsp;
                                    @endforeach
                                </p>
                                <p><span>Producer :</span> 
                                @foreach(movie_producer($data->id) as $prodecure)
                                {{ obj($prodecure)->producers_name }} ,&nbsp;
                                @endforeach
                                </p>
                                <p><span>Distributor :</span>{{ movie_distributor($data->distributor_code)->distributor_name }}</p>
                                <p><span>Production :</span> {{ $data->production_house }}</p>
                               
                            </div>
                            <div class="col-md-5 movie_meta_1">
                                {{-- <button class="btn btn-success btn-sm btn-custom"><i class="fa fa-money"></i> Buy Now</button> --}}
                                <a href="{{ url('single/'.$data->id) }}" class="btn btn-success btn-sm btn-custom"><i class="fa fa-money"></i> Buy Now</a>
                                <button class="btn btn-danger btn-sm btn-custom watchtailler" value="{{ $data->tailler }}"></span> <i class="fa fa-play"></i> Watch Taillor</button>
                            </div>
                            <div class="col-md-6 movie_meta_2">
                                {{-- <div class="mt-3"></div> --}}
                                <p class="movie_short">{{ str_limit($data->description,20 )}}</p>
                                {{-- <p><span>Director :</span>
                                    @foreach(movie_director($data->id) as $director)
                                    <?php // $director = obj($director); ?>
                                     {{$director->director_name }} ,
                                     @endforeach
                                    </p>
                                <p><span>Cast :</span> Drama</p>
                                <p><span>Producer :test</p> --}}
                            </div>
                            <div class="col-md-6 movie_meta_2 mt-4">
                                <h1>Available Show</h1>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                                <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                                <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                                <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                            </div>
                        </div>
                   </div><!--meta data end-->
               </div> <!--overlay end-->
          </div> <!--section content img  end-->
          @empty
          <div class="col-md-4">
            No data found
          </div>
          @endforelse

          {{-- <div class="section_content_img col-md-4">
            <img src="{{url('public/home/images/image 1.png')}}" alt="" class="img-fluid">
            <div class="overlay">
                <div class="meta-data">
                    <div class="row">
                        <div class="col-md-5 movie_meta_1">
                            <img src="{{url('public/home/images/image 1.png')}}" alt="" class="overlay-img">
                        </div>
                        <div class="col-md-6 movie_meta_2">
                            <h1 class="movie_title"><span>Title : </span> Jaari</h1>
                            <p><span>Type :</span> Drama</p>
                            <p class="movie_short">In publishing and graphic design, Lorem ipsum is a placeholder
                               text commonly used to demonstrate the visual form of a document or 
                               a typeface without relying on meaningful 
                               content. </p>
                        </div>
                        <div class="col-md-5 movie_meta_1">
                            <button class="btn btn-success btn-sm btn-custom"><i class="fa fa-money"></i> Buy Now</button>
                            <button class="btn btn-danger btn-sm btn-custom"></span> <i class="fa fa-play"></i> Watch Taillor</button>
                        </div>
                        <div class="col-md-6 movie_meta_2">
                            <div class="mt-3"></div>
                            <p><span>Director :</span> Drama</p>
                            <p><span>Release on :</span> Drama</p>
                            <p><span>Release on :test</p>
                        </div>
                        <div class="col-md-6 movie_meta_2 mt-4">
                            <h1>Available Show</h1>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                            <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                            <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                            <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                        </div>
                    </div>
               </div><!--meta data end-->
           </div> <!--overlay end-->
      </div> <!--section content img  end-->

      <div class="section_content_img col-md-4">
        <img src="{{url('public/home/images/image 1.png')}}" alt="" class="img-fluid">
        <div class="overlay">
            <div class="meta-data">
                <div class="row">
                    <div class="col-md-5 movie_meta_1">
                        <img src="{{url('public/home/images/image 1.png')}}" alt="" class="overlay-img">
                    </div>
                    <div class="col-md-6 movie_meta_2">
                        <h1 class="movie_title"><span>Title : </span> Jaari</h1>
                        <p><span>Type :</span> Drama</p>
                        <p class="movie_short">In publishing and graphic design, Lorem ipsum is a placeholder
                           text commonly used to demonstrate the visual form of a document or 
                           a typeface without relying on meaningful 
                           content. </p>
                    </div>
                    <div class="col-md-5 movie_meta_1">
                        <button class="btn btn-success btn-sm btn-custom"><i class="fa fa-money"></i> Buy Now</button>
                        <button class="btn btn-danger btn-sm btn-custom"></span> <i class="fa fa-play"></i> Watch Taillor</button>
                    </div>
                    <div class="col-md-6 movie_meta_2">
                        <div class="mt-3"></div>
                        <p><span>Director :</span> Drama</p>
                        <p><span>Release on :</span> Drama</p>
                        <p><span>Release on :test</p>
                    </div>
                    <div class="col-md-6 movie_meta_2 mt-4">
                        <h1>Available Show</h1>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                        <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                        <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                        <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                    </div>
                </div>
           </div><!--meta data end-->
       </div> <!--overlay end-->
  </div> <!--section content img  end--> --}}
  
        </div><!--row end-->
    </div><!--section content end-->
</section>

<div class="mt-4"></div>

<!-- ads section -->
<section class="advertisement">
    <div class="container-md">
        <div class="row">
            <div class="col-md-12 mt-3">
                <img src="{{url('public/home/images/Advertisement.png')}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- ads section -->

<!-- Coming Soon section -->
<section id="section_now_showing" class="container-md">
    <div class="section_title">
        <h2 class="my-4 heading_1">Coming Soon</h2>
        <!-- <input type="date"> -->
    </div>
    <div class="section_content">
        <div class="row">
            <?php
            // dd(coming_soon_movie());
                // coming_soon_movie();
                ?>
            @forelse(coming_soon_movie() as $data)
            <?php $data = obj($data); ?>
            <div class="section_content_img col-md-4">
                @if(!$data->image==NULL)
                <img src="{{url($data->image)}}" alt="{{$data->movie_name}}" class="img-fluid">
                @endif
                <div class="overlay">
                    <div class="meta-data">
                        <div class="row">
                            <div class="col-md-5 movie_meta_1">
                                {{-- <img src="{{url('public/home/images/image 1.png')}}" alt="" class="overlay-img"> --}}
                                @if(!$data->image==NULL)
                                <img src="{{url($data->image)}}" alt="{{$data->movie_name}}" class="overlay-img">
                                @endif
                            </div>
                            <div class="col-md-6 movie_meta_2">
                                <h1 class="movie_title"><span>Title : </span> {{ $data->movie_name }}</h1>
                                <p><span>Type :</span> {{ $data->movie_type }}</p>
                                <p><span>Release Date :</span> {{ $data->release_date }}</p>
                            
                                <p><span>Director :</span>
                                    @foreach(movie_director($data->id) as $director)
                                    <?php $director = obj($director); ?>
                                     {{$director->director_name }} ,&nbsp;
                                     @endforeach
                                    </p>
                                <p><span>Cast :</span> 
                                    @foreach(movie_cast($data->id) as $movie_cast)
                                    {{ obj($movie_cast)->cast_name }} ,&nbsp;
                                    @endforeach
                                </p>
                                <p><span>Producer :</span> 
                                @foreach(movie_producer($data->id) as $prodecure)
                                {{ obj($prodecure)->producers_name }} ,&nbsp;
                                @endforeach
                                </p>
                                <p><span>Distributor :</span>{{ movie_distributor($data->distributor_code)->distributor_name }}</p>
                                <p><span>Production :</span> {{ $data->production_house }}</p>
                               
                            </div>
                            <div class="col-md-5 movie_meta_1">
                                {{-- <button class="btn btn-success btn-sm btn-custom"><i class="fa fa-money"></i> Buy Now</button> --}}
                                <a href="{{ url('single/'.$data->id) }}" class="btn btn-success btn-sm btn-custom"><i class="fa fa-money"></i> Buy Now</a>
                                <button class="btn btn-danger btn-sm btn-custom watchtailler" value="{{ $data->tailler }}"></span> <i class="fa fa-play"></i> Watch Taillor</button>
                            </div>
                            <div class="col-md-6 movie_meta_2">
                                {{-- <div class="mt-3"></div> --}}
                                <p class="movie_short">{{ str_limit($data->description,20 )}}</p>
                                {{-- <p><span>Director :</span>
                                    @foreach(movie_director($data->id) as $director)
                                    <?php // $director = obj($director); ?>
                                     {{$director->director_name }} ,
                                     @endforeach
                                    </p>
                                <p><span>Cast :</span> Drama</p>
                                <p><span>Producer :test</p> --}}
                            </div>
                            <div class="col-md-6 movie_meta_2 mt-4">
                                <h1>Available Show</h1>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                                <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                                <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                                <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                            </div>
                        </div>
                   </div><!--meta data end-->
               </div> <!--overlay end-->
          </div> <!--section content img  end-->
          @empty
          <div class="col-md-4">
            No data found
          </div>
          @endforelse


         
  
        </div><!--row end-->
    </div><!--section content end-->
</section>

@endsection
@push('home_script')
<script>
    $(document).ready(function(){
        $('.watchtailler').on('click',function(){
            var tailler = $(this).val();
            console.log(tailler);
            Swal.fire({
            title: 'Jaari',
            html: '<iframe width="560" height="315" src="'+tailler+'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: false,
            width:800,
            confirmButtonText:
                '<i class="fa fa-thumbs-up"></i> Great!',
            confirmButtonAriaLabel: 'Thumbs up, great!',
            cancelButtonText:
                '<i class="fa fa-thumbs-down"></i>',
            cancelButtonAriaLabel: 'Thumbs down'
            })
        });
    });

</script>

{{-- <script>
    Swal.fire({
        // title: 'Sweet!',
        imageUrl: 'https://unsplash.it/400/200',
        imageWidth: 1000,
        imageHeight: 600,
        width:1000,
        imageAlt: 'Custom image',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
    confirmButtonText:
        '<i class="fa fa-thumbs-up"></i> Great!',
    confirmButtonAriaLabel: 'Thumbs up, great!',
    cancelButtonText:
        '<i class="fa fa-thumbs-down"></i>',
    cancelButtonAriaLabel: 'Thumbs down'
    })
</script> --}}
@endpush