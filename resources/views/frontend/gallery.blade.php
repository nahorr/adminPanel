@extends('layouts.app')
@section('content')

<!-- Gallary Section Start -->
<section id="gallery" class="section-padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="section-title-header text-center">
            <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">our event gallery</h2>
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
