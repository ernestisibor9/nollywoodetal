@extends('frontend.dashboard')

@section('main')

@section('title')
	Nollywoodetal - Home
@endsection

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
                        <a href="{{route('movie.details', $item->id)}}"><img class="img-fluid" src="{{asset($item->movie_cover)}}" alt=""></a>
                    </figure>
                    <div class="feature-content">
                        <div class="product">
                            <h4>{{$item->movie_title}}</h4>
                        </div>
                        <a href="{{route('movie.details', $item->id)}}" class= 'btn btn-success'>Readmore</a>
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
                        <a href="{{route('movie.details', $item->id)}}"><img class="img-fluid" src="{{asset($item->movie_cover)}}" alt=""></a>
                    </figure>
                    <div class="feature-content">
                        <div class="product">
                            <h4>{{$item->movie_title}}</h4>
                        </div>
                        <a href="{{route('movie.details', $item->id)}}" class="btn btn-success">Readmore</a>
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
                        <a href="{{url('blog/details/'.$item->post_slug)}}"><img class="img-fluid" src="{{asset($item->post_image)}}" alt=""></a>
                    </figure>
                    <div class="feature-content">
                        <div class="product">
                            <h4>{{$item->post_title}}</h4>
                            <ul class="address">
                                <li>
                                    <a href="{{url('blog/details/'.$item->post_slug)}}">
                                        <i class="lni-alarm-clock"></i>
                                        {{$item->created_at->format('M d Y')}}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('blog/details/'.$item->post_slug)}}"><i class="lni-user"></i>{{$item->author}}</a>
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
      {{-- <section class="cta section-padding">
        <div class="container">
          <div class="row justify-content-center">
            <h4 style="text-align: center;">Partners</h4>
          </div>
        </div>
      </section> --}}
      <!-- Cta Section End -->

      <section class="featured-lis section-padding">
    <div class="container">
        <div class="section-title">
            <h2>Partners</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="testimonials" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                    <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 4440px; left: 0px; display: block; transition: all 800ms ease 0s; transform: translate3d(-1110px, 0px, 0px);"><div class="owl-item" style="width: 555px;"><div class="logo">
                        <img src="{{asset('frontend/assets/img/partners/boi.png')}}" alt="">
                    </div></div><div class="owl-item" style="width: 555px;"><div class="logo">
                        <img src="{{asset('frontend/assets/img/partners/national_film_video_censors_board.png')}}" alt="">
                    </div></div><div class="owl-item" style="width: 555px;"><div class="logo">
                        <img src="{{asset('frontend/assets/img/partners/nbc.png')}}" alt="">
                    </div></div><div class="owl-item" style="width: 555px;"><div class="logo">
                        <img src="{{asset('frontend/assets/img/partners/nfc.png')}}" alt="">
                    </div></div></div></div>
                                     

                <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page"><span class=""></span></div><div class="owl-page active"><span class=""></span></div></div></div></div>
            </div>
        </div>
    </div>
</section>

@endsection