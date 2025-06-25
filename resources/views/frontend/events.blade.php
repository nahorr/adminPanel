<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>EventUp - Event and Conference Template</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" >
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/fonts/line-icons.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/slicknav.css') }}">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/nivo-lightbox.css') }}" >

    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/animate.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/main.css') }}">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/responsive.css') }}">

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <div class="theme-header clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a href="index.html" class="navbar-brand"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lni-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">
                    Home
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="schedule.html">
                    About Us
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="speakers.html">
                    Events
                  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="speakers.html">
                      Gallery
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
        </div>
        <div class="mobile-menu" data-logo="{{ asset('frontend/assets/img/logo.png') }}"></div>
      </nav>
      <!-- Navbar End -->

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9 col-sm-12">
              <div class="contents text-center">
                <div class="icon">
                  <i class="lni-mic"></i>
                </div>
                <p class="banner-info">15, Oct 2020 - Maria Hall, NY, United states</p>
                <h2 class="head-title">Developers Conference</h2>
                <p class="banner-desc">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, nobis nesciunt atque perferendis, ipsa doloremque deserunt cum qui.</p>
                <div class="banner-btn">
                  <a href="#" class="btn btn-common">Get Ticket</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Count Bar Start -->
    <section id="count">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10">
            <div class="count-wrapper text-center">
              <div class="time-countdown wow fadeInUp" data-wow-delay="0.2s">
                <div id="clock" class="time-count"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Count Bar End -->

    <!-- Blog Section Start -->
    <section id="blog" class="section-padding">
        <div class="container">
            <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Upcoming Events</h2>
                <p class="wow fadeInDown" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an <br> cule dicta iriure at phaedrum.</p>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="blog-item">
                <div class="blog-image">
                    <a href="#">
                    <img class="img-fluid" src="{{ asset('frontend/assets/img/blog/img-1.jpg') }}" alt="">
                    </a>
                </div>
                <div class="descr">
                    <div class="icon">
                    <i class="lni-image"></i>
                    </div>
                    <h3 class="title">
                    <a href="single-post.html">
                        Learn Something New
                    </a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipsing elit, sed do eiusmodincididunt ut labore et dolore</p>
                </div>
                <div class="meta-tags">
                    <span class="date"><i class="lni-calendar"></i> Jan 20, 2020</span>
                    <span class="comments"><i class="lni-comment-alt"></i> <a href="#"> 0 Comment</a></span>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="blog-item">
                <div class="blog-image">
                    <a href="#">
                    <img class="img-fluid" src="{{ asset('frontend/assets/img/blog/img-2.jpg') }}" alt="">
                    </a>
                </div>
                <div class="descr">
                    <div class="icon">
                    <i class="lni-arrow-right"></i>
                    </div>
                    <h3 class="title">
                    <a href="single-post.html">
                        The Student's Meeting
                    </a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipsing elit, sed do eiusmodincididunt ut labore et dolore</p>
                </div>
                <div class="meta-tags">
                    <span class="date"><i class="lni-calendar"></i> Jan 20, 2020</span>
                    <span class="comments"><i class="lni-comment-alt"></i> <a href="#"> 0 Comment</a></span>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="blog-item">
                <div class="blog-image">
                    <a href="#">
                    <img class="img-fluid" src="{{ asset('frontend/assets/img/blog/img-3.jpg') }}" alt="">
                    </a>
                </div>
                <div class="descr">
                    <div class="icon">
                    <i class="lni-camera"></i>
                    </div>
                    <h3 class="title">
                    <a href="single-post.html">
                        The Meeting in the university
                    </a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipsing elit, sed do eiusmodincididunt ut labore et dolore</p>
                </div>
                <div class="meta-tags">
                    <span class="date"><i class="lni-calendar"></i> Jan 20, 2020</span>
                    <span class="comments"><i class="lni-comment-alt"></i> <a href="#"> 0 Comment</a></span>
                </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <a href="#" class="btn btn-common">View all Events</a>
            </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Video Section Start -->
    <div class="ready-to-play">
      <video id="bgvid" class="stop" loop>
        <source src="{{ asset('frontend/assets/video/event.webm') }}" type="video/mp4">
      </video>
      <div id="polina" class="video-text">
        <div class="tb-t">
            <div class="tb-c">
              <div class="polina"><button><i class='lni-play'></i></button></div>
            </div>
        </div>
      </div>
    </div>
    <!-- Video Section End -->

    <!-- Information Bar Start -->
    <section id="information-bar">
      <div class="container">
        <div class="row inforation-wrapper">
          <div class="col-lg-3 col-md-6 col-xs-12">
            <ul>
              <li>
                <i class="lni-map-marker"></i>
              </li>
              <li><span><b>Location</b> Maria Hall, NY, USA</span></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <ul>
              <li>
                <i class="lni-calendar"></i>
              </li>
              <li><span><b>Date & Time</b> 10am - 7pm, 15th Oct</span></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <ul>
              <li>
                <i class="lni-mic"></i>
              </li>
              <li><span><b>Speakers</b> 25 Professionals</span></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <ul>
              <li>
                <i class="lni-user"></i>
              </li>
              <li><span><b>Seats</b> 100 People</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Information Bar End -->

     <!-- intro Section Start -->
    <section id="intro" class="intro section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Why You Join?</h2>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an <br> cule dicta iriure at phaedrum.</p>
            </div>
          </div>
        </div>
        <div class="row intro-wrapper">
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="single-intro-text mb-70">
               <i class="lni-microphone"></i>
               <h3>Great Speakers</h3>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia, excepturi.
               </p>
               <span class="count-number">01</span>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="single-intro-text">
               <i class="lni-users"></i>
               <h3 class="ts-title">New People</h3>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia, excepturi.
               </p>
               <span class="count-number">02</span>
            </div>
            <div class="border-shap left"></div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="single-intro-text mb-70">
               <i class="lni-bullhorn"></i>
               <h3>Global Event</h3>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia, excepturi.
               </p>
               <span class="count-number">03</span>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="single-intro-text mb-70">
               <i class="lni-heart"></i>
               <h3>Get Inspired</h3>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia, excepturi.
               </p>
               <span class="count-number">04</span>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="single-intro-text mb-70">
               <i class="lni-cup"></i>
               <h3>Networking Session</h3>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia, excepturi.
               </p>
               <span class="count-number">05</span>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="single-intro-text mb-70">
               <i class="lni-gallery"></i>
               <h3>Meet New Faces</h3>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia, excepturi.
               </p>
               <span class="count-number">06</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- intro Section End -->

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
                <div class="counterUp">43</div>
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
                <div class="counterUp">800</div>
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
                <div class="counterUp">24</div>
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
                <div class="counterUp">34</div>
                <p>Sessions</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Area End-->

    <!-- Gallary Section Start -->
    <section id="gallery" class="section-padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Event Gallery</h2>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an <br> cule dicta iriure at phaedrum.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="{{ asset('frontend/assets/img/gallery/img-1.jpg') }}" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="{{ asset('frontend/assets/img/gallery/img-1.jpg') }}">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-3">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="{{ asset('frontend/assets/img/gallery/img-2.jpg') }}" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="{{ asset('frontend/assets/img/gallery/img-2.jpg') }}">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-3">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="{{ asset('frontend/assets/img/gallery/img-3.jpg') }}" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="{{ asset('frontend/assets/img/gallery/img-3.jpg') }}">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-3">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="{{ asset('frontend/assets/img/gallery/img-4.jpg') }}" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="{{ asset('frontend/assets/img/gallery/img-4.jpg') }}">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-3">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="{{ asset('frontend/assets/img/gallery/img-5.jpg') }}" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="{{ asset('frontend/assets/img/gallery/img-5.jpg') }}">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-3">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="{{ asset('frontend/assets/img/gallery/img-6.jpg') }}" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="{{ asset('frontend/assets/img/gallery/img-6.jpg') }}">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-3">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="{{ asset('frontend/assets/img/gallery/img-7.jpg') }}" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="{{ asset('frontend/assets/img/gallery/img-7.jpg') }}">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-3">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="{{ asset('frontend/assets/img/gallery/img-8.jpg') }}" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="{{ asset('frontend/assets/img/gallery/img-8.jpg') }}">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-3">
          <div class="col-xs-12">
            <a href="#" class="btn btn-common">Browse All</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Gallary Section End -->

    <!-- Event Slides Section Start -->
    {{-- <section id="event-up" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Upcoming Event</h2>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an <br> cule dicta iriure at phaedrum.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="event-item">
              <img class="img-fluid" src="{{ asset('frontend/assets/img/event/img1.jpg') }}" alt="">
              <div class="overlay-text">
                <div class="content">
                  <h3>Business Confrence</h3>
                  <a href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="event-item">
              <img class="img-fluid" src="{{ asset('frontend/assets/img/event/img2.jpg') }}" alt="">
              <div class="overlay-text">
                <div class="content">
                  <h3>X Confrence</h3>
                  <a href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="event-item">
              <img class="img-fluid" src="{{ asset('frontend/assets/img/event/img3.jpg') }}" alt="">
              <div class="overlay-text">
                <div class="content">
                  <h3>Y Confrence</h3>
                  <a href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="event-item">
              <img class="img-fluid" src="{{ asset('frontend/assets/img/event/img4.jpg') }}" alt="">
              <div class="overlay-text">
                <div class="content">
                  <h3>Z Confrence</h3>
                  <a href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-common">More Event</a>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- Event Slides Section End -->



    <footer>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="subscribe-inner wow fadeInDown" data-wow-delay="0.3s">
              <h2 class="subscribe-title">To Get Nearly Updates</h2>
              <form class="text-center form-inline">
                <input class="mb-20 form-control" name="email" placeholder="Enter Your Email Here">
                <button type="submit" class="btn btn-common sub-btn" data-style="zoom-in" data-spinner-size="30" name="submit" id="submit">
                  <span class="ladda-label"><i class="lni-check-box"></i> Subscribe</span>
                </button>
              </form>
            </div>
            <div class="footer-logo">
              <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="">
            </div>
            <div class="social-icons-footer">
              <ul>
                <li class="facebook"><a target="_blank" href="3"><i class="lni-facebook-filled"></i></a></li>
                <li class="twitter"><a target="_blank" href="3"><i class="lni-twitter-filled"></i></a></li>
                <li class="linkedin"><a target="_blank" href="3"><i class="lni-linkedin-original"></i></a></li>
                <li class="google"><a target="_blank" href="3"><i class="lni-google"></i></a></li>
                <li class="pinterest"><a target="_blank" href="3"><i class="lni-pinterest"></i></a></li>
              </ul>
            </div>
            <div class="site-info">
              <p>Designed and Developed by <a href="http://uideck.com" rel="nofollow">UIdeck</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
      <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
      </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('frontend/assets/js/jquery-min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nav.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/nivo-lightbox.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/video.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/contact-form-script.min.js') }}"></script>

  </body>
</html>
