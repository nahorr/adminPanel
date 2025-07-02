@extends('layouts.app')
@section('content')

<!-- Gallary Section Start -->
<section id="gallery" class="section-padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="section-title-header text-center">
            <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our event gallery</h2>
            <p class="wow fadeInDown" data-wow-delay="0.2s">
              Check out highlights from our past events.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach($gallery_images as $gallery_image)
        <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="gallery-box">
            <div class="img-thumb">
              <img class="img-fluid" src="{{ asset('storage/' . $gallery_image->image_path) }}" alt="">
            </div>
            <div class="overlay-box text-center">
              <a class="lightbox" href="{{ asset('storage/' . $gallery_image->image_path) }}">
                <i class="lni-plus"></i>
              </a>
            </div>
          </div>
        </div>
        @endforeach
    </div>
  </section>
  <!-- Gallary Section End -->


@endsection
