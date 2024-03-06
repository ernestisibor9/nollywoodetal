@php
    $currentRouteName = \Illuminate\Support\Facades\Route::currentRouteName();
@endphp

@if ($currentRouteName === 'search.movie')

<div class="page-header" style="background: url('{{asset('frontend/assets/img/banner.jpg')}}');">
    <div class="container">
      <div class="row">         
        <div class="col-md-12">
          <div class="breadcrumb-wrapper">
            <h2 class="product-title">Movie Details</h2>
            <ol class="breadcrumb">
              <li><a href="{{url('/')}}">Home /</a></li>
              <li class="current">Movie Details</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

@elseif ($currentRouteName === 'all.blog')

<div class="page-header" style="background: url('{{asset('frontend/assets/img/banner.jpg')}}');">
    <div class="container">
      <div class="row">         
        <div class="col-md-12">
          <div class="breadcrumb-wrapper">
            <h2 class="product-title">Blog Details</h2>
            <ol class="breadcrumb">
              <li><a href="{{url('/')}}">Home /</a></li>
              <li class="current">Blog Details</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

  @elseif ($currentRouteName === 'contact.us')
<div class="page-header" style="background: url('{{asset('frontend/assets/img/banner.jpg')}}');">
    <div class="container">
      <div class="row">         
        <div class="col-md-12">
          <div class="breadcrumb-wrapper">
            <h2 class="product-title">Contact Details</h2>
            <ol class="breadcrumb">
              <li><a href="{{url('/')}}">Home /</a></li>
              <li class="current">Contact Us</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

   @elseif ($currentRouteName === 'films')
<div class="page-header" style="background: url('{{asset('frontend/assets/img/banner.jpg')}}');">
    <div class="container">
      <div class="row">         
        <div class="col-md-12">
          <div class="breadcrumb-wrapper">
            <h2 class="product-title">Films</h2>
            <ol class="breadcrumb">
              <li><a href="{{url('/')}}">Home /</a></li>
              <li class="current">Films</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

  @elseif ($currentRouteName === 'movie.details')
<div class="page-header" style="background: url('{{asset('frontend/assets/img/banner.jpg')}}');">
    <div class="container">
      <div class="row">         
        <div class="col-md-12">
          <div class="breadcrumb-wrapper">
            <h2 class="product-title">Movie Details</h2>
            <ol class="breadcrumb">
              <li><a href="{{url('/')}}">Home /</a></li>
              <li class="current">Movie Details</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

  @elseif ($currentRouteName === 'company')
<div class="page-header" style="background: url('{{asset('frontend/assets/img/banner.jpg')}}');">
    <div class="container">
      <div class="row">         
        <div class="col-md-12">
          <div class="breadcrumb-wrapper">
            <h2 class="product-title">Companies</h2>
            <ol class="breadcrumb">
              <li><a href="{{url('/')}}">Home /</a></li>
              <li class="current">Companies</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

  @elseif ($currentRouteName === 'company.details')
<div class="page-header" style="background: url('{{asset('frontend/assets/img/banner.jpg')}}');">
    <div class="container">
      <div class="row">         
        <div class="col-md-12">
          <div class="breadcrumb-wrapper">
            <h2 class="product-title">Company Details</h2>
            <ol class="breadcrumb">
              <li><a href="{{url('/')}}">Home /</a></li>
              <li class="current">Companies</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

   @elseif ($currentRouteName === 'search.movie')
<div class="page-header" style="background: url('{{asset('frontend/assets/img/banner.jpg')}}');">
    <div class="container">
      <div class="row">         
        <div class="col-md-12">
          <div class="breadcrumb-wrapper">
            <h2 class="product-title">Films</h2>
            <ol class="breadcrumb">
              <li><a href="{{url('/')}}">Home /</a></li>
              <li class="current">Films</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

   @elseif ($currentRouteName === 'genre.filter')
<div class="page-header" style="background: url('{{asset('frontend/assets/img/banner.jpg')}}');">
    <div class="container">
      <div class="row">         
        <div class="col-md-12">
          <div class="breadcrumb-wrapper">
            <h2 class="product-title">Film</h2>
            <ol class="breadcrumb">
              <li><a href="{{url('/')}}">Home /</a></li>
              <li class="current">Films</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

   @elseif ($currentRouteName === 'country.filter')
<div class="page-header" style="background: url('{{asset('frontend/assets/img/banner.jpg')}}');">
    <div class="container">
      <div class="row">         
        <div class="col-md-12">
          <div class="breadcrumb-wrapper">
            <h2 class="product-title">Film</h2>
            <ol class="breadcrumb">
              <li><a href="{{url('/')}}">Home /</a></li>
              <li class="current">Films</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

    @else

<div class="page-header" style="background: url('{{asset('frontend/assets/img/banner.jpg')}}');">
    <div class="container">
      <div class="row">         
        <div class="col-md-12">
          <div class="breadcrumb-wrapper">
            <h2 class="product-title">Blog Details</h2>
            <ol class="breadcrumb">
              <li><a href="{{url('/')}}">Home /</a></li>
              <li class="current">Blog Details</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

    
@endif
