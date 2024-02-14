<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ClassiXER - Classified Ads Website Template</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/fonts/line-icons.css')}}">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/slicknav.css')}}">

    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/nivo-lightbox.css')}}" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/animate.css')}}">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/owl.carousel.css')}}">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/custom.css')}}">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/responsive.css')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
        @include('frontend.body.header')
    <!-- Header Area wrapper End -->

        @yield('main')

    <!-- Footer Section Start -->
        @include('frontend.body.footer')
    <!-- Footer Section End --> 

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a>

    <!-- Preloader -->
    {{-- <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div> --}}
    <!-- End Preloader -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('frontend/assets/js/jquery-min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/wow.js')}}"></script>
    <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/nivo-lightbox.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    <script src="{{asset('frontend/assets/js/form-validator.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/contact-form-script.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/summernote.js')}}"></script>

  </body>
</html>