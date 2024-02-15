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
