@extends('frontend.dashboard')

@section('main')

@php
    $latestMovie = App\Models\Movie::latest()->limit(3)->get();
    $featuredMovie = App\Models\Movie::where('status', '1')->latest()->limit(3)->get();
    $blog = App\Models\Post::latest()->limit(3)->get();
@endphp

<section class="featured-lis section-padding">
    <div class="d-flex justify-content-center align-items-center p-3">
        <div class="adver-div">
            <h5 class="text-center">Banner Advert</h5>
        </div>
    </div>
</section>

<section class="featured section-padding">
    <div class="container">
        <h1 class="section-title">Latest Movies</h1>
        <div class="row">
            @foreach ($latestMovie as $item)
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                <div class="featured-box">
                    <figure class="movies">
                        <a href="http://127.0.0.1:8000/#"><img class="img-fluid" src="{{asset($item->movie_cover)}}" alt=""></a>
                    </figure>
                    <div class="feature-content">
                        <div class="product">
                            <h4>{{$item->movie_title}}</h4>
                        </div>
                        <a href="http://127.0.0.1:8000/webpage/movie-page" class="btn btn-success">Readmore</a>
                    </div>
                </div>
            </div> 
            @endforeach
            
            {{-- <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                <div class="featured-box">
                    <figure class="movies">
                        <a href="http://127.0.0.1:8000/#"><img class="img-fluid" src="{{asset('frontend/assets/img/latest/latest2.jpg')}}" alt=""></a>
                    </figure>
                    <div class="feature-content">
                        <div class="product">
                            <h4>Movie Title 3</h4>


                        </div>
                        <a href="http://127.0.0.1:8000/webpage/movie-page" class="btn btn-success">Readmore</a>

                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                <div class="featured-box">
                    <figure class="movies">
                        <a href="http://127.0.0.1:8000/#">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/latest/latest3.jpg')}}" alt="">
                        </a>
                    </figure>
                    <div class="feature-content">
                        <div class="product">
                            <h4>Movie Title 3</h4>

                        </div>
                        <a href="http://127.0.0.1:8000/webpage/movie-page" class="btn btn-success">Readmore</a>
                    </div>
                </div>
            </div> --}}
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                <div class="banner-cover">
                    <div class="box-banner">
                        <h5>Advert</h5>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="mt-5 text-center mb-5">
            <a href="http://127.0.0.1:8000/webpage/listing-page" class="btn btn-primary">Readmore</a>
        </div> --}}
    </div>
</section>


<section class="featured-lis section-padding">
    <div class="d-flex justify-content-center align-items-center p-3">
        <div class="adver-div">
            <h5 class="text-center">Banner Advert</h5>
        </div>
    </div>
</section>

<section class="featured section-padding">
    <div class="container">
        <h1 class="section-title">Featured Movies</h1>
        <div class="row">
            @foreach ($featuredMovie as $item)
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                <div class="featured-box">
                    <figure class="movies">
                        <a href="http://127.0.0.1:8000/#"><img class="img-fluid" src="{{asset($item->movie_cover)}}" alt=""></a>
                    </figure>
                    <div class="feature-content">
                        <div class="product">
                            <h4>{{$item->movie_title}}</h4>
                        </div>
                        <a href="http://127.0.0.1:8000/webpage/movie-page" class="btn btn-success">Readmore</a>
                    </div>
                </div>
            </div> 
            @endforeach
            
            {{-- <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                <div class="featured-box">
                    <figure class="movies">
                        <a href="http://127.0.0.1:8000/#"><img class="img-fluid" src="{{asset('frontend/assets/img/latest/latest2.jpg')}}" alt=""></a>
                    </figure>
                    <div class="feature-content">
                        <div class="product">
                            <h4>Movie Title 3</h4>


                        </div>
                        <a href="http://127.0.0.1:8000/webpage/movie-page" class="btn btn-success">Readmore</a>

                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                <div class="featured-box">
                    <figure class="movies">
                        <a href="http://127.0.0.1:8000/#">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/latest/latest3.jpg')}}" alt="">
                        </a>
                    </figure>
                    <div class="feature-content">
                        <div class="product">
                            <h4>Movie Title 3</h4>

                        </div>
                        <a href="http://127.0.0.1:8000/webpage/movie-page" class="btn btn-success">Readmore</a>
                    </div>
                </div>
            </div> --}}
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                <div class="banner-cover">
                    <div class="box-banner">
                        <h5>Advert</h5>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="mt-5 text-center mb-5">
            <a href="http://127.0.0.1:8000/webpage/listing-page" class="btn btn-primary">Readmore</a>
        </div> --}}
    </div>
</section>
  
<section class="featured section-padding">
    <div class="container">
        <div class="section-title">
            <h2>Blog</h2>
        </div>
        <div class="row">
            @foreach ($blog as $item)
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                <div class="featured-box">
                    <figure>
                        <a href="http://127.0.0.1:8000/#"><img class="img-fluid" src="{{asset($item->post_image)}}" alt=""></a>
                    </figure>
                    <div class="feature-content">
                        <div class="product">
                            <h4>{{$item->post_title}}</h4>
                            <ul class="address">
                                <li>
                                    <a href="http://127.0.0.1:8000/#">
                                        <i class="lni-alarm-clock"></i>
                                        {{$item->created_at->format('M d Y')}}
                                    </a>
                                </li>
                                <li>
                                    <a href="http://127.0.0.1:8000/#"><i class="lni-user"></i>{{$item->author}}</a>
                                </li>

                            </ul>
                            <p>
                                {!! substr($item->post_content, 0, 74)!!}...
                            </p>
                        </div>
                        <a href="{{url('blog/details/'.$item->post_slug)}}" class="btn btn-primary">Readmore</a>
                    </div>
                    
                </div>
               
            </div>
            @endforeach
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                <div class="banner-cover">
                    <div class="box-banner">
                        <h5>Advert</h5>
                    </div>
                </div>
            </div>


        </div>

        <div class="mt-5 text-center mb-5">
            <a href="http://127.0.0.1:8000/webpage/blog-page" class="btn btn-primary">Readmore</a>
        </div>
    </div>
</section>
  
  
      <!-- Cta Section Start -->
      <section class="cta section-padding">
        <div class="container">
          <div class="row justify-content-center">
            <h4 style="text-align: center;">Partners</h4>
          </div>
        </div>
      </section>
      <!-- Cta Section End -->

@endsection