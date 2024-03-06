@extends('frontpage.dashboard')

@section('main')

@section('title')
	Nollywoodetal - Company Details
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
                    <img class="img-fluid" src="{{asset($company->company_logo)}}" alt="">
                  </div>
                  <span class="price"></span>
                </div>
                <div class="item">
                  <div class="product-img">
                    <img class="img-fluid" src="{{asset($company->company_logo)}}" alt="">
                  </div>
                  <span class="price"></span>
                </div>
                <div class="item">
                  <div class="product-img">
                    <img class="img-fluid" src="{{asset($company->company_logo)}}" alt="">
                  </div>
                  <span class="price"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="details-box">
              <div class="ads-details-info">
                <h2>{{$company->company_name}}</h2>
                {{-- <p class="mb-2">{{Str::substr($company->description, 0, 130)}}</p>
                <div class="details-meta mb-3">
                  <span><a href="#"><i class="lni-alarm-clock"></i> {{$company->created_at->format('M d Y')}}</a></span> --}}
                  <span><a href="#"><i class="lni-map-marker"></i>{{$company->address}}</a></span>
                  {{-- <span><a href="#"><i class="lni-eye"></i> 299 View</a></span> --}}
                </div>
                <h4 class="title-small mb-3">company Info:</h4>

              </div>
              <ul class="advertisement mb-4">
                <li>
                <p><strong><i class="lni-folder"></i> Company Name:</strong> <a href="#">{{$company->company_name}}</a></p>
                </li>
                <li>
                <p><strong><i class="lni-archive"></i> Company Email:</strong> {{$company->email}}</p>
                </li>
                <li>
                <p><strong><i class="lni-package"></i> Company Phone:</strong> <a href="#">{{$company->phone}}</a></p>
                </li>
                <li>
                <p><strong><i class="lni-package"></i> Company Website:</strong> <a href="#">{{$company->website}}</a></p>
                </li>
              </ul> 
              <div class="share">
                <span>Share: </span>
                <div class="social-link">  
                  <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                  <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                  <a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
                  <a class="google" href="#"><i class="lni-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Product Info End -->

        <!-- Product Description Start -->
        <div class="description-info">
          <div class="row">
            <div class="col-lg-8 col-md-6 col-xs-12">
              <div class="description">
                <h4>Company's Movie</h4>
                <p>{{$company->movie->movie_title}}</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="short-info">
                <h4>Short Info</h4>
                <ul>
                  <li><a href="#"><i class="lni-users"></i> Company Email <span>{{$company->email}}</span></a></li>
                  <li><a href="#"><i class="lni-printer"></i>Company Phone <span>{{$company->phone}}</span></a></li>
                  <li><a href="#"><i class="lni-reply"></i> Company Website <span>{{$company->website}}</span></a></li>
                  <li><a href="#"><i class="lni-warning"></i> Company Address <span>{{$company->address}}</span></a></li>
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