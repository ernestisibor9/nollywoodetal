<footer>
  <!-- Footer Area Start -->
  <section class="footer-Content">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
          <div class="widget">
            {{-- <h3 class="footer-logo"><img src="assets/img/logo.png" alt=""></h3> --}}
            <h3 class="block-title">About us</h3>
            <div class="textwidget">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget facilisis sed, auctor ut purus.</p>
            </div>
          </div>
        </div>

        @php
            $post = App\Models\Post::latest()->limit(2)->get();
        @endphp

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
          <div class="widget">
            <h3 class="block-title">Latest Post</h3>
            <ul class="media-content-list">
              @foreach ($post as $item)
                  <li>
                <div class="media-left">
                  <img class="img-fluid" src="{{asset($item->post_image)}}" alt="">
                  <div class="overlay">
                    <span class="price">{{$item->author}}</span>
                  </div>
                </div>
                <div class="media-body">
                  <h4 class="post-title"><a href="{{url('blog/details/'.$item->post_slug)}}">{{$item->post_title}}</a></h4>
                  <span class="date">{{$item->created_at->format('M d Y')}}</span>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
          <div class="widget">
            <h3 class="block-title">Help & Support</h3>
            <ul class="menu">
              <li><a href="#">Live Chat</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Purchase Protection</a></li>
              <li><a href="#">Support</a></li>
              <li><a href="#">Contact us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
          <div class="widget">
            <h3 class="block-title">Contact us</h3>
            <p class="text-sub">No 4 Jide Ayo Close Off Omofade Crescent, Omole Phase 1, Ojodu-Ikeja, Lagos</p>
            {{-- <form method="post" id="subscribe-form" name="subscribe-form" class="validate">
              <div class="form-group is-empty">
                <input type="email" value="" name="Email" class="form-control" id="EMAIL" placeholder="Email address" required="">
                <button type="submit" name="subscribe" id="subscribes" class="btn btn-common sub-btn"><i class="lni-check-box"></i></button>
                <div class="clearfix"></div>
              </div>
            </form>  --}}
            <ul class="footer-social">
              <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
              <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
              <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
              <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
            </ul>          
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer area End -->
  
  <!-- Copyright Start  -->
  <div id="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="site-info float-left">
            <p>All copyrights reserved &copy; <?php echo date("Y"); ?> - Designed by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
          </div>              
          <div class="float-right">  
            <ul class="bottom-card">
              <li>
                  <a href="#"><img src="{{asset('frontend/assets/img/footer/card1.jpg')}}" alt="card"></a>
              </li>
              <li>
                  <a href="#"><img src="{{asset('frontend/assets/img/footer/card2.jpg')}}" alt="card"></a>
              </li>
              <li>
                  <a href="#"><img src="{{asset('frontend/assets/img/footer/card3.jpg')}}" alt="card"></a>
              </li>
              <li>
                  <a href="#"><img src="{{asset('frontend/assets/img/footer/card4.jpg')}}" alt="card"></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Copyright End -->

</footer>