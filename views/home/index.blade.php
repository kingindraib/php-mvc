@extends('home.master')
@section('title','home')
@section('body')

<section>
    <div class="container-main">
        <div class="owl-slider">
            <div class="owl-carousel owl-theme">
                <div class="item owl_slider_items">
                    <img src="{{url('public/home/images/banner-1.jfif')}}" alt="" class="owl_slider_img">
                </div>
                <div class="item owl_slider_items">
                    <img src="{{url('public/home/images/banner-2.png')}}" alt="" class="owl_slider_img">
                </div>
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
                                <button class="btn btn-danger btn-sm btn-custom watchtailler"></span> <i class="fa fa-play"></i> Watch Taillor</button>
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
  </div> <!--section content img  end-->
  
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
  </div> <!--section content img  end-->
  
        </div><!--row end-->
    </div><!--section content end-->
</section>

@endsection
@push('home_script')
<script>
    $(document).ready(function(){
        $('.watchtailler').on('click',function(){
            Swal.fire({
            title: 'Jaari',
            html: '<iframe width="560" height="315" src="https://www.youtube.com/embed/4sx0nvVDYA8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
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

<script>
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
</script>
@endpush