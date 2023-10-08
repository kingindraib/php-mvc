@extends('home.master')
@section('title','Movie Page')
@section('body')

<section id="section_now_showing" class="container-md">
    <div class="section_title">
        <h2 class="my-4 heading_1">Now Showing Page</h2>
        <!-- <input type="date"> -->
    </div>
    <div class="section_content">
        <div class="row">
            <div class="section_content_img col-md-4">
                <img src="images/image 1.png" alt="" class="img-fluid">
                <div class="overlay">
                    <div class="meta-data">
                        <div class="row">
                            <div class="col-md-5 movie_meta_1">
                                <img src="images/image 1.png" alt="" class="overlay-img">
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
            <img src="images/image 1.png" alt="" class="img-fluid">
            <div class="overlay">
                <div class="meta-data">
                    <div class="row">
                        <div class="col-md-5 movie_meta_1">
                            <img src="images/image 1.png" alt="" class="overlay-img">
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
        <img src="images/image 1.png" alt="" class="img-fluid">
        <div class="overlay">
            <div class="meta-data">
                <div class="row">
                    <div class="col-md-5 movie_meta_1">
                        <img src="images/image 1.png" alt="" class="overlay-img">
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