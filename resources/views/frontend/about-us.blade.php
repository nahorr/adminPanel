@extends('layouts.app')
@section('content')

<!-- About Section Start -->
<section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="img-thumb mx-auto" style="max-width:560px">
                    @if(!empty($about_us->about_image))
                        <img class="w-100 h-auto rounded shadow"
                            src="{{ asset('storage/' . $about_us->about_image) }}"
                            alt="About Image">
                    @else
                        <img class="w-100 h-auto rounded shadow"
                            src="{{ asset('frontend/assets/img/about/img1.png') }}"
                            alt="Default About Image">
                    @endif
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="about-content">
                <div>
                <div class="about-text">
                    {{-- <h2>Welcome to {{ $company->name ?? 'Our Company' }}</h2> --}}
                    <p>
                    {!! $about_us->content ?? 'No Content Yet' !!}
                    </p>
                    {{-- <p>
                    {{ $about_us->mission ?? 'No Content Yet'}}
                    </p> --}}
                </div>
                {{-- <ul class="stylish-list mb-3">
                    <h5>Our Services</h5>
                    @foreach($services as $service)
                    <li>
                    <i class="lni-check-mark-circle"></i>{{ $service->short_description }}
                    </li>
                    @endforeach
                </ul> --}}
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

@endsection
