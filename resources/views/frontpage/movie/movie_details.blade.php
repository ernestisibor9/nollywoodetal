@extends('frontpage.dashboard')

@section('main')

@section('title')
	Nollywoodetal - Movie Details
@endsection

    <!-- Ads Details Start -->
    <div class="section-padding">
      <div class="container">
        <!-- Product Info Start -->
        <div class="product-info row">
          <div class="col-lg-7 col-md-12 col-xs-12">
            <div class="details-box ads-details-wrapper">
              <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item">
                  <div class="product-img">
                    <img class="img-fluid" src="{{asset($movie->movie_cover)}}" alt="">
                  </div>
                  <span class="price"></span>
                </div>
                <div class="item">
                  <div class="product-img">
                    <img class="img-fluid" src="{{asset($movie->movie_cover)}}" alt="">
                  </div>
                  <span class="price"></span>
                </div>
                <div class="item">
                  <div class="product-img">
                    <img class="img-fluid" src="{{asset($movie->movie_cover)}}" alt="">
                  </div>
                  <span class="price"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="details-box">
              <div class="ads-details-info">
                <h2>{{$movie->movie_title}}</h2>
                <p class="mb-2">{{Str::substr($movie->description, 0, 130)}}</p>
                <div class="details-meta mb-3">
                  <span><a href="#"><i class="lni-alarm-clock"></i> {{$movie->created_at->format('M d Y')}}</a></span>
                  {{-- <span><a href="#"><i class="lni-map-marker"></i>  New York</a></span>
                  <span><a href="#"><i class="lni-eye"></i> 299 View</a></span> --}}
                </div>
                <h4 class="title-small mb-3">Movie Info:</h4>

              </div>
              <ul class="advertisement mb-4">
                <li>
                <p><strong><i class="lni-folder"></i> Producer:</strong> <a href="#">{{$movie->producer->producer_name}}</a></p>
                </li>
                <li>
                <p><strong><i class="lni-archive"></i> Genre:</strong> {{$movie->genre->genre}}</p>
                </li>
                <li>
                <p><strong><i class="lni-package"></i> Country:</strong> <a href="#">{{$movie->country}}</a></p>
                </li>
              </ul>
              {{-- <div class="ads-btn mb-4">
                <a href="#" class="btn btn-common btn-reply"><i class="lni-envelope"></i> Email</a>
                <a href="#" class="btn btn-common"><i class="lni-phone-handset"></i> 01154256643</a>
              </div>
              <div class="share">
                <span>Share: </span>
                <div class="social-link">  
                  <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                  <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                  <a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
                  <a class="google" href="#"><i class="lni-google-plus"></i></a>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
        <!-- Product Info End -->

        <!-- Product Description Start -->
        <div class="description-info">
          <div class="row">
            <div class="col-lg-8 col-md-6 col-xs-12">
              <div class="description">
                <h4>Description</h4>
                <p>{{$movie->description}}</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="short-info">
                <h4>Short Info</h4>
                <ul>
                  <li><a href="#"><i class="lni-users"></i> Movie title <span>{{$movie->movie_title}}</span></a></li>
                  <li><a href="#"><i class="lni-printer"></i>Genre <span>{{$movie->genre->genre}}</span></a></li>
                  <li><a href="#"><i class="lni-reply"></i> Producer <span>{{$movie->producer->producer_name}}</span></a></li>
                  <li><a href="#"><i class="lni-warning"></i> Country <span>{{$movie->country}}</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Product Description End -->
      </div>    
    </div>
    <!-- Ads Details End -->



@endsection