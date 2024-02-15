@extends('frontpage.dashboard')

@section('main')

@section('title')
	Nollywoodetal - Contact us
@endsection

    <!-- Start Content -->
    <!-- Map Section Start -->
    <section id="google-map-area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.117327740868!2d3.3568960999999993!3d6.632347499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b93ea8c91e493%3A0x83c08a7ee8f4cd21!2s4%20Jide%20Ayo%20Cl%2C%20Isheri%2C%20Ikeja%20101233%2C%20Lagos!5e0!3m2!1sen!2sng!4v1707991739750!5m2!1sen!2sng" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section>
    <!-- Map Section End -->

    <!-- Start Contact Us Section -->
    <section id="content" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
            <h2 class="contact-title">
              Send Message Us
            </h2>
            <!-- Form -->
            <form action = "{{route('store.message')}}" method = "post" >
            @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                      </div>                    
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group">                      
                        <input type="email" class="form-control" id="email" placeholder="Email" required name= "email">                      
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group"> 
                        <input type="text" class="form-control" id="msg_subject" name="subject" placeholder="Subject" required>
                      </div>
                    </div> 
                  </div>
                </div>    
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" name="message" placeholder="Message" rows="10" required></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-common">Submit Now</button>
                </div>

              </div> 
            </form>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <h2 class="contact-title">
              Get In Touch
            </h2>
            <div class="information">
              <p>Do you have a question or comment?</p>
              <p>Send a message using the form below and we'll be in touch with you within 48 hours</p>
              <div class="contact-datails">
                <div class="icon">
                  <i class="lni-map-marker icon-radius"></i>
                </div>
                <div class="info">
                  <h3>Address</h3>
                  <span class="detail">No 4 Jide Ayo Close Off Omofade Crescent <br> Omole Phase 1, </span> <br> <span>Ojodu-Ikeja, Lagos</span>
                </div>
              </div>      
              <div class="contact-datails">
                <div class="icon">
                  <i class="lni-pointer icon-radius"></i>
                </div>
                <div class="info">
                  <h3>Have any Questions?</h3>
                  <span class="detail">osezua.odumacreative@gmail.com</span> <br>
                  <span class="detail">info@nollywood.com</span>
                </div>
              </div>          
              <div class="contact-datails">
                <div class="icon">
                  <i class="lni-phone-handset icon-radius"></i>
                </div>
                <div class="info">
                  <h3>Call Us & Hire us</h3>
                  <span class="detail">Main Office: +234 802 314 1942</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Us Section  -->    
    <!-- End Content -->

@endsection