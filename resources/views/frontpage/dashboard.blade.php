<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>@yield('title')</title>

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    @include('frontpage.body.header')
    <!-- Header Area wrapper End -->

    <!-- Page Header Start -->
    @include('frontpage.body.page_header')
    <!-- Page Header End -->  

    <!-- Start Content -->
    @yield('main')
    <!-- End Content -->

    <!-- Footer Section Start -->
    @include('frontpage.body.footer')
    <!-- Footer Section End --> 

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a>

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

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script>
	@if(Session::has('message'))
	var type = "{{ Session::get('alert-type','info') }}"
	switch(type){
		case 'info':
		toastr.info(" {{ Session::get('message') }} ");
		break;

		case 'success':
		toastr.success(" {{ Session::get('message') }} ");
		break;

		case 'warning':
		toastr.warning(" {{ Session::get('message') }} ");
		break;

		case 'error':
		toastr.error(" {{ Session::get('message') }} ");
		break; 
	}
	@endif 
	</script>      
  </body>
</html>