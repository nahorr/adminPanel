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


    <!-- Header Area wrapper Starts-->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <div class="theme-header clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a href="{{ route('frontend.index') }}" class="navbar-brand"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lni-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('frontend.index') }}">
                    Home
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('frontend.about.us') }}">
                    About Us
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('frontend.events') }}">
                    Events
                  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.gallery') }}">
                      Gallery
                    </a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('frontend.contact') }}">
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

      @if (Route::is('frontend.index'))
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
      <!-- Hero Area End-->
      @endif
    </header>
    <!-- Header Area wrapper End -->

    @if (!Route::is('frontend.index'))
    <!-- Page Header Start other pages-->
    <div class="page-header">
        <div class="container">
            <div class="row">
            <div class="col-12">
                <div class="page-header-inner text-center">
                <h1 class="page-title">
                    About Us
                </h1>
                <ul>
                    <li>
                        <a class="active" href="{{ route('frontend.index') }}">Home</a>
                    </li>
                    <li>About</li>
                </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Page Header End other pages-->
    @endif

    @yield('content')

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
