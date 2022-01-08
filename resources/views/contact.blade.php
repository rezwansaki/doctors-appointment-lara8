@extends('layout')

@section('content')

@include('slider')

  <!-- Contact Section Start Here -->
  <section class="contact-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 contact-area-main">
          <div class="contact-title">Contact</div>
          <div class="row">
            <div class="col-xl-6 contact-form">
              <!-- Contact Form Start Here -->
              <div class="login-form">
                <!-- login form start form -->
                <form action="" method="">
                  <div class="mb-3">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a message here" id="message" name="message"></textarea>
                      <label for="message">Message</label>
                    </div>
                  </div>
                  <div class="d-grid gap-2 py-2">
                    <button type="submit" class="btn btn-primary">Send</button>
                  </div>
                </form>
                <div class="send-message-text">
                  You are logged in as 'Md. Rezwan Saki Alin' or a guest or You are not logged in.
                </div>
                <!-- login form end here form -->
            </div>
              <!-- Contact Form End Here -->
            </div>
            <div class="col-xl-6 contact-google-map">
              <!--Google map-->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14608.036944846497!2d90.36710721974299!3d23.747050044464984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b33cffc3fb%3A0x4a826f475fd312af!2sDhanmondi%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1640774718801!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              <!--Google Maps-->
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12 contact-form">
              <div class="card">
                <div class="card-body">
                  <div class="contact-area-main-title">ABC Hospitial</div>
                  <div class="contact-area-main-address">Dhanmondi, Dhaka.</div>
                  <div class="contact-area-main-phone"><span><i class="fas fa-phone-alt"></i></span>+88-0123456789, +88-0133456789, +88-0124456789</div>
                  <div class="contact-area-main-email"><span><i class="fas fa-envelope"></i></span>abchospital@abc.com</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section End Here -->
  
@endsection