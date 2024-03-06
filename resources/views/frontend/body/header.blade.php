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
            <li class="nav-item">
              <a class="nav-link" href="{{route('films')}}">
                Films
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://filmfreeway.com/AfricanIndigenousLanguageFilmFestival" target= '_blank'>
                Film Festival
              </a>
            </li>
            <li class="nav-item">
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

        </div>
      </div>

      <!-- Mobile Menu Start -->
      <ul class="mobile-menu">
        <li>
              <a class="nav-link" href="{{url('/')}}" >
                Home
              </a>
            </li>
            <li >
              <a class="nav-link" href="#">
                About
              </a>
            </li>
            <li>
              <a class="nav-link" href="{{route('films')}}">
                Films
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://filmfreeway.com/AfricanIndigenousLanguageFilmFestival" target= '_blank'>
                Film Festival
              </a>
            </li>
            <li>
              <a class="nav-link" href="{{route('company')}}">
                Companies
              </a>
            </li>
            <li>
              <a class="nav-link" href="{{route('all.blog')}}">
                Blog
              </a>
            </li>
            <li>
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

  <!-- Hero Area Start -->
  <div id="hero-area">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12 text-center">
          <div class="contents">
            <h1 class="head-title">NOLLYWOOD ET AL</h1>
            <p>Film Mart * Company * News Blog</p>
            {{-- <p>Search For Movie</p>
            <div class="search-bar">
              <div class="search-inner">

                @php
                    $movies = App\Models\Movie::latest()->get();
                    $genre = App\Models\Genre::latest()->get();
                    $producer = App\Models\Producer::latest()->get();
                @endphp

                <form class="search-form" method="post" action="{{route('search.movie')}}">
                  @csrf
                  <div class="form-group inputwithicon ">
                    <i class="lni-map-marker"></i>
                    <div class="select">
                      <select name= 'country' required class= 'form-select p-2 @error('country')is-invalid @enderror'>
                        <option value="">Select Country</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="USA">USA</option>
                        <option value="China">China</option>
                        <option value="Korea">Korea</option>
                        <option value="Ghana">Ghana</option>
                        <option value="South Africa">South Africa</option>
                        <option value="England">England</option>
                        <option value="France">France</option>
                        @error('country')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </select>
                    </div>
                  </div>
                  <div class="form-group inputwithicon">
                    <i class="lni-map-marker"></i>
                    <div class="select">
                      <select name= 'genre_id' required class= 'form-select p-2 @error('genre_id')is-invalid @enderror'>
                        <option value="none">Select Genre</option>
                          @foreach ($genre as $item)
                              <option value = {{$item->genre}}>{{$item->genre}}</option>
                          @endforeach
                          @error('genre_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </select>
                    </div>
                  </div>
                  <div class="form-group inputwithicon">
                    <i class="lni-menu"></i>
                    <div class="select">
                      <select name = 'producer_id' required class= 'form-select p-2 @error('producer_id')is-invalid @enderror'>
                        <option value="none">Select Producer</option>
                          @foreach ($producer as $item)
                              <option value = {{$item->producer_name}}>{{$item->producer_name}}</option>
                          @endforeach
                          @error('producer_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </select>
                    </div>
                  </div>
                  <button class="btn btn-common" type="submit"><i class="lni-search"></i> Search Now</button>
                </form>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero Area End -->

</header>