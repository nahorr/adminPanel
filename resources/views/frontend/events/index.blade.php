@extends('layouts.app')
@section('content')

<!-- Blog Section Start -->
<section id="blog" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Events</h2>
                    <p class="wow fadeInDown" data-wow-delay="0.2s">
                        Discover our latest upcoming programs and learning opportunities!
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            @forelse($events as $event)
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="blog-item">
                        <div class="blog-image">
                            <a href="{{ route('frontend.events.show', $event->id) }}">
                                <img class="img-fluid" src="{{ $event->banner_image ? asset('storage/' . $event->banner_image) : asset('frontend/assets/img/blog/default.jpg') }}" alt="{{ $event->title }}">
                            </a>
                        </div>
                        <div class="descr">
                            <div class="icon">
                                <i class="lni-calendar"></i>
                            </div>
                            <h3 class="title">
                                <a href="{{ route('frontend.events.show', $event->id) }}">
                                    {{ $event->title }}
                                </a>
                            </h3>
                            <p>{{ Str::limit($event->description, 100) }}</p>
                        </div>
                        <div class="meta-tags">
                            <span class="date">
                                <i class="lni-calendar"></i>
                                {{ \Carbon\Carbon::parse($event->start_time)->format('M d, Y') }}
                            </span>
                            <span class="comments">
                                <i class="lni-map-marker"></i> {{ $event->location }}
                            </span>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>No upcoming events available at the moment.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Blog Section End -->

@endsection
