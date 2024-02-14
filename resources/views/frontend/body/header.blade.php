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
              <a class="nav-link" href="#">
                Film Movie
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                Film Companies
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('all.blog')}}">
                Blog
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">
                Contact
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
              <a class="nav-link" href="#">
                Film Movie
              </a>
            </li>
            <li>
              <a class="nav-link" href="#">
                Film Companies
              </a>
            </li>
            <li>
              <a class="nav-link" href="{{route('all.blog')}}">
                Blog
              </a>
            </li>
            <li>
              <a class="nav-link" href="contact.html">
                Contact
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
            <div class="search-bar">
              <div class="search-inner">
                <form class="search-form">
                  <div class="form-group inputwithicon">
                    <i class="lni-tag"></i>
                    <input type="text" name="customword" class="form-control" placeholder="Enter Product Keyword">
                  </div>
                  <div class="form-group inputwithicon">
                    <i class="lni-map-marker"></i>
                    <div class="select">
                      <select>
                        <option value="none">Locations</option>
                        <option value="none">New York</option>
                        <option value="none">California</option>
                        <option value="none">Washington</option>
                        <option value="none">Birmingham</option>
                        <option value="none">Chicago</option>
                        <option value="none">Phoenix</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group inputwithicon">
                    <i class="lni-menu"></i>
                    <div class="select">
                      <select>
                        <option value="none">Categories</option>
                        <option value="none">Jobs</option>
                        <option value="none">Electronics</option>
                        <option value="none">Mobile</option>
                        <option value="none">Training</option>
                        <option value="none">Pets</option>
                        <option value="none">Real Estate</option>
                        <option value="none">Services</option>
                        <option value="none">Training</option>
                        <option value="none">Vehicles</option>
                      </select>
                    </div>
                  </div>
                  <button class="btn btn-common" type="button"><i class="lni-search"></i> Search Now</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero Area End -->

</header>