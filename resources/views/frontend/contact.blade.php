@extends('layouts.app')
@section('content')

<!-- Map Section Start -->
<section id="map">
    <div class="container-fluid">
      <div class="row">
        <div id="map_canvas"></div>
      </div>
    </div>
  </section>
  <!-- Map Section End -->

  <!-- Contact Us Section -->
  <section id="contact-map" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title-header text-center">
            <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Contact Us</h2>
            <p class="wow fadeInDown" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an <br> cule dicta iriure at phaedrum.</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12 col-xs-12">
          <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
            <div class="form-wrapper">
              <form role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                <div class="row">
                  <div class="col-md-6 form-line">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="email" placeholder="First Name" required data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6 form-line">
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your Email">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12 form-line">
                    <div class="form-group">
                      <input type="tel" class="form-control" id="msg_subject" name="subject" placeholder="Subject" required data-error="Please enter your message subject">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" rows="4" id="message" name="message" required data-error="Write your message"></textarea>
                    </div>
                    <div class="form-submit">
                      <button type="submit" class="btn btn-common" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Us Section End -->

  <!-- Map Section Start -->
  <section id="google-map-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15864.15480778837!2d-77.44908382752939!3d38.953293865566366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6775cb22a9fa1341!2sThe+Firkin+%26+Fox!5e0!3m2!1sen!2sbd!4v1543773685573"></object>
        </div>
      </div>
    </div>
  </section>
  <!-- Map Section End -->

  <!-- Contact text Start -->
  <section id="contact-text">
    <div class="container">
      <div class="row contact-wrapper">
        <div class="col-lg-4 col-md-5 col-xs-12">
          <ul>
            <li>
              <i class="lni-home"></i>
            </li>
            <li><span>Cesare Rosaroll, 118 80139 Eventine</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-3 col-xs-12">
          <ul>
            <li>
              <i class="lni-phone"></i>
            </li>
            <li><span>+789 123 456 79</span></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-3 col-xs-12">
          <ul>
            <li>
              <i class="lni-envelope"></i>
            </li>
            <li><span>Support@example.com</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact text End -->

@endsection
