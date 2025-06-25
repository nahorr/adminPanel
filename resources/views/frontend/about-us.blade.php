@extends('layouts.app')
@section('content')

<!-- About Section Start -->
<section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-xs-12">
          <div class="img-thumb">
            <img class="img-fluid" src="{{ asset('frontend/assets/img/about/img1.png') }}" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-xs-12">
          <div class="about-content">
            <div>
              <div class="about-text">
                <h2>Welcome to our company</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ncididunt ametfh consectetur dolore magna aliqua. Ut enim ad minim veniam dolor sitame magnaelit ate consectetur adipisicing. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod.</p>
              </div>
              <ul class="stylish-list mb-3">
                <li><i class="lni-check-mark-circle"></i>We are providing different services</li>
                <li><i class="lni-check-mark-circle"></i>We are one of leading company</li>
                <li><i class="lni-check-mark-circle"></i>Profitability is the primary goal of all business</li>
                <li><i class="lni-check-mark-circle"></i>Learn how to grow your Business </li>
                <li><i class="lni-check-mark-circle"></i>Professional solutions for your business</li>
              </ul>
              <a class="btn btn-common" href="#">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section End -->

  <!-- Counter Area Start-->
  <section class="counter-section section-padding">
    <div class="container">
      <div class="row">
        <!-- Counter Item -->
        <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget">
          <div class="counter">
            <div class="icon">
              <i class="lni-mic"></i>
            </div>
            <div class="counter-content">
              <div class="counterUp">431</div>
              <p>Spekers</p>
            </div>
          </div>
        </div>
        <!-- Counter Item -->
        <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget">
          <div class="counter">
            <div class="icon">
              <i class="lni-bulb"></i>
            </div>
            <div class="counter-content">
              <div class="counterUp">642</div>
              <p>Participate</p>
            </div>
          </div>
        </div>
        <!-- Counter Item -->
        <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget">
          <div class="counter">
            <div class="icon">
              <i class="lni-briefcase"></i>
            </div>
            <div class="counter-content">
              <div class="counterUp">245</div>
              <p>Sponsors</p>
            </div>
          </div>
        </div>
        <!-- Counter Item -->
        <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget">
          <div class="counter">
            <div class="icon">
              <i class="lni-coffee-cup"></i>
            </div>
            <div class="counter-content">
              <div class="counterUp">3456</div>
              <p>Sessions</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Counter Area End-->

  <!-- Team Section Start -->
  <section id="team" class="section-padding text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title-header text-center">
            <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Speakers</h2>
            <p class="wow fadeInDown" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an <br> cule dicta iriure at phaedrum.</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-bt">
        <div class="col-lg-3 col-md-6 col-xs-12">
          <!-- Team Item Starts -->
          <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
            <div class="team-img">
              <img class="img-fluid" src="{{ asset('frontend/assets/img/team/team-01.jpg') }}" alt="">
              <div class="team-overlay">
                <div class="overlay-social-icon text-center">
                  <ul class="social-icons">
                    <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-google" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-pinterest" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="info-text">
              <h3><a href="#">JONATHON DOE</a></h3>
              <p>Product Designer, Tesla</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>
        <div class="col-lg-3 col-md-6 col-xs-12">
          <!-- Team Item Starts -->
          <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
            <div class="team-img">
              <img class="img-fluid" src="{{ asset('frontend/assets/img/team/team-02.jpg') }}" alt="">
              <div class="team-overlay">
                <div class="overlay-social-icon text-center">
                  <ul class="social-icons">
                    <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-google" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-pinterest" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="info-text">
              <h3><a href="#">Patric Green</a></h3>
              <p>Front-end Developer</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>

        <div class="col-lg-3 col-md-6 col-xs-12">
          <!-- Team Item Starts -->
          <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
            <div class="team-img">
              <img class="img-fluid" src="{{ asset('frontend/assets/img/team/team-03.jpg') }}" alt="">
              <div class="team-overlay">
                <div class="overlay-social-icon text-center">
                  <ul class="social-icons">
                    <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-google" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-pinterest" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="info-text">
              <h3><a href="#">Paul Kowalsy</a></h3>
              <p>Lead Designer, TNW</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>

        <div class="col-lg-3 col-md-6 col-xs-12">
          <!-- Team Item Starts -->
          <div class="team-item wow fadeInUp" data-wow-delay="0.8s">
            <div class="team-img">
              <img class="img-fluid" src="{{ asset('frontend/assets/img/team/team-04.jpg') }}" alt="">
              <div class="team-overlay">
                <div class="overlay-social-icon text-center">
                  <ul class="social-icons">
                    <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-google" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-pinterest" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="info-text">
              <h3><a href="#">Jhon Doe</a></h3>
              <p>Back-end Developer, ASUS</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>

        <div class="col-lg-3 col-md-6 col-xs-12">
          <!-- Team Item Starts -->
          <div class="team-item wow fadeInUp" data-wow-delay="1s">
            <div class="team-img">
              <img class="img-fluid" src="{{ asset('frontend/assets/img/team/team-05.jpg') }}" alt="">
              <div class="team-overlay">
                <div class="overlay-social-icon text-center">
                  <ul class="social-icons">
                    <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-google" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-pinterest" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="info-text">
              <h3><a href="#">Daryl Dixon</a></h3>
              <p>Full-stack Developer, Google</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>

        <div class="col-lg-3 col-md-6 col-xs-12">
          <!-- Team Item Starts -->
          <div class="team-item wow fadeInUp" data-wow-delay="1.2s">
            <div class="team-img">
              <img class="img-fluid" src="{{ asset('frontend/assets/img/team/team-06.jpg') }}" alt="">
              <div class="team-overlay">
                <div class="overlay-social-icon text-center">
                  <ul class="social-icons">
                    <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-google" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-pinterest" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="info-text">
              <h3><a href="#">Chris Adams</a></h3>
              <p>UI Designer, Apple</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>

        <div class="col-lg-3 col-md-6 col-xs-12">
          <!-- Team Item Starts -->
          <div class="team-item wow fadeInUp" data-wow-delay="1.4s">
            <div class="team-img">
              <img class="img-fluid" src="{{ asset('frontend/assets/img/team/team-07.jpg') }}" alt="">
              <div class="team-overlay">
                <div class="overlay-social-icon text-center">
                  <ul class="social-icons">
                    <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-google" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-pinterest" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="info-text">
              <h3><a href="#">Paul Kowalsy</a></h3>
              <p>Lead Designer, TNW</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>

        <div class="col-lg-3 col-md-6 col-xs-12">
          <!-- Team Item Starts -->
          <div class="team-item wow fadeInUp" data-wow-delay="1.6s">
            <div class="team-img">
              <img class="img-fluid" src="{{ asset('frontend/assets/img/team/team-08.jpg') }}" alt="">
              <div class="team-overlay">
                <div class="overlay-social-icon text-center">
                  <ul class="social-icons">
                    <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-google" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-pinterest" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="info-text">
              <h3><a href="#">Jhon Doe</a></h3>
              <p>Back-end Developer, ASUS</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>
      </div>
      <a href="speakers.html" class="btn btn-common mt-30 wow fadeInUp" data-wow-delay="1.9s">Meet with all speakers</a>
    </div>
  </section>
  <!-- Team Section End -->

  <!-- Call To Action Section Start -->
  <section id="cta" class="section-padding">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9 col-md-12 col-xs-12 wow fadeInDown animated" data-wow-delay="0.3s">
          <div class="cta-text text-center">
            <h3>Meet your next customer</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto nam consequatur, dolorum quod placeat, ipsum. fugit velit voluptates laboriosam in perferendis cum sint? Temporibus.</p>
            <a href="#" class="btn btn-common">Get Partnership Desk</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Call To Action Section End -->

@endsection
