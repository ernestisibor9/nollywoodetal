<style>
  .navbar {
    justify-content: center !important;
    text-align: center !important;
  }

</style>

@php
    $route = Route::current()->getName();
@endphp

<header id="header-wrap">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar ">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="lni-menu"></span>
            <span class="lni-menu"></span>
            <span class="lni-menu"></span>
          </button>
          <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}" >
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                About
              </a>
            </li>
            <li class="nav-item {{ ($route == 'films') ? 'active':'' }}">
              <a class="nav-link" href="{{route('films')}}">
                Films
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://filmfreeway.com/AfricanIndigenousLanguageFilmFestival" target= '_blank'>
                Film Festival
              </a>
            </li>
            <li class="nav-item {{ ($route == 'company') ? 'active':'' }} ">
              <a class="nav-link" href="{{route('company')}}">
                Companies
              </a>
            </li>
            <li class="nav-item {{ ($route == 'all.blog') ? 'active':'' }} ">
              <a class="nav-link" href="{{route('all.blog')}}">
                Blog
              </a>
            </li>
            <li class="nav-item {{ ($route == 'contact.us') ? 'active':'' }}">
              <a class="nav-link" href="{{route('contact.us')}}">
                Contact
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://www.coalcityfilmfestival.com/registration" target='_blank'>
                Create an Account
              </a>
            </li>
          </ul>

        </div>
      </div>

      <!-- Mobile Menu Start -->
      <ul class="mobile-menu">
        <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}" >
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                About
              </a>
            </li>
            <li class="nav-item {{ ($route == 'films') ? 'active':'' }}">
              <a class="nav-link" href="{{route('films')}}">
                Films
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://filmfreeway.com/AfricanIndigenousLanguageFilmFestival" target= '_blank'>
                Film Festival
              </a>
            </li>
            <li class="nav-item {{ ($route == 'company') ? 'active':'' }} ">
              <a class="nav-link" href="{{route('company')}}">
                Companies
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('all.blog')}}">
                Blog
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact.us')}}">
                Contact
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://www.coalcityfilmfestival.com/registration" target='_blank'>
                Create an Account
              </a>
            </li>
      </ul>
      <!-- Mobile Menu End -->

    </nav>
    <!-- Navbar End -->
  </header>