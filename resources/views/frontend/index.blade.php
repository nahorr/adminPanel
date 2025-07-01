@extends('layouts.app')
@section('content')

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
            <p class="wow fadeInDown" data-wow-delay="0.2s">
              Stay updated with our latest events and activities.
            </p>
          </div>
        </div>
      </div>
  
      <div class="row">
        @forelse($upcomingEvents as $event)
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="blog-item">
              <div class="blog-image">
                <a href="{{  route('frontend.events.show', $event->id) }}">
                  <img class="img-fluid" src="{{ $event->banner_image ? asset('storage/' . $event->banner_image) : asset('frontend/assets/img/blog/default.jpg') }}" alt="{{ $event->title }}">
                </a>
              </div>
              <div class="descr">
                <div class="icon">
                  <i class="lni-calendar"></i>
                </div>
                <h3 class="title">
                  <a href="#">{{ $event->title }}</a>
                </h3>
                <p>{{ Str::limit($event->description, 100) }}</p>
              </div>
              <div class="meta-tags">
                <span class="date">
                  <i class="lni-calendar"></i>
                  {{ \Carbon\Carbon::parse($event->start_time)->format('M d, Y') }}
                </span>
                <span class="comments">
                  <i class="lni-map-marker"></i>
                  {{ $event->location }}
                </span>
              </div>
            </div>
          </div>
        @empty
          <div class="col-12 text-center">
            <p class="text-muted">No upcoming events at the moment.</p>
          </div>
        @endforelse
  
        @if($upcomingEvents->isNotEmpty())
          <div class="col-12 text-center mt-3">
            <a href="#" class="btn btn-common">View all Events</a>
          </div>
        @endif
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

@endsection
