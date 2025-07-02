@extends('layouts.app')
@section('content')

<!-- About Section Start -->
<section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-xs-12">
          <div class="img-thumb">
            @if(!empty($about_us->about_image))
              <img class="img-fluid" src="{{ asset('storage/' . $about_us->about_image) }}" alt="About Image">
            @else
              <img class="img-fluid" src="{{ asset('frontend/assets/img/about/img1.png') }}" alt="Default About Image">
            @endif

          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-xs-12">
          <div class="about-content">
            <div>
              <div class="about-text">
                <h2>Welcome to {{ $company->name }}</h2>
                <p>
                  {{ $about_us->content }}
                </p>
              </div>
              <ul class="stylish-list mb-3">
                @foreach($services as $service)
                <li>
                  <i class="lni-check-mark-circle"></i>{{ $service->short_description }}
                </li>
                @endforeach
              </ul>
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

  <section id="team" class="section-padding text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title-header text-center">
            <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Team</h2>
            <p class="wow fadeInDown" data-wow-delay="0.2s">
              Meet the amazing minds leading our discussions and workshops.
            </p>
          </div>
        </div>
      </div>
      <div class="row justify-content-bt">
        @foreach($teamMembers as $index => $member)
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="team-item wow fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">
              <div class="team-img">
                <img class="img-fluid" src="{{ asset('storage/' . $member) }}" alt="{{ $member }}">

                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      @if(!empty($member['socials']['twitter']))
                        <li><a href="{{ $member['socials']['twitter'] }}"><i class="lni-twitter-filled"></i></a></li>
                      @endif
                      @if(!empty($member['socials']['google']))
                        <li><a href="{{ $member['socials']['google'] }}"><i class="lni-google"></i></a></li>
                      @endif
                      @if(!empty($member['socials']['facebook']))
                        <li><a href="{{ $member['socials']['facebook'] }}"><i class="lni-facebook-filled"></i></a></li>
                      @endif
                      @if(!empty($member['socials']['pinterest']))
                        <li><a href="{{ $member['socials']['pinterest'] }}"><i class="lni-pinterest"></i></a></li>
                      @endif
                    </ul>
                  </div>
                </div>
              </div>
              {{-- <div class="info-text">
                <h3><a href="#">{{ $member['name'] }}</a></h3>
                <p>{{ $member['role'] }}</p>
              </div> --}}
            </div>
          </div>
        @endforeach
      </div>
  
      {{-- <a href="{{ route('speakers.index') }}" class="btn btn-common mt-30 wow fadeInUp" data-wow-delay="1.9s">
        Meet with all speakers
      </a> --}}
    </div>
  </section>
  

@endsection
