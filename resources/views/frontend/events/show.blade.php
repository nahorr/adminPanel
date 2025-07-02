@extends('layouts.app')
@section('content')

<!-- Start Content -->
<section id="content" class="section">
  <div class="container">
    <div class="row">
      <!-- Main Content -->
      <div class="col-lg-8 col-md-12 col-xs-12">
            @include('alert-messages')
        <div class="blog-post single-gallery">
          <!-- Feature Image -->
          <div class="feature-inner">
            @if($event->banner_image)
              <a class="lightbox" href="{{ asset('storage/' . $event->banner_image) }}">
                <img src="{{ asset('storage/' . $event->banner_image) }}" alt="{{ $event->title }}">
              </a>
            @endif
          </div>

          <!-- Post Content -->
          <div class="post-content">
            <div class="meta">
              <span class="meta-part"><i class="lni-user"></i> {{ $event->organizer }}</span>
              <span class="meta-part"><i class="lni-calendar"></i> {{ $event->start_time->format('F d, Y') }}</span>
              <span class="meta-part"><i class="lni-ticket-alt"></i> {{ ucfirst($event->event_type) }}</span>
              <span class="meta-part"><i class="lni-map-marker"></i> {{ $event->location }}</span>
            </div>

            <h3 class="post-title">{{ $event->title }}</h3>

            <p>{!! nl2br(e($event->description)) !!}</p>

            @if($event->is_free == 0)
              <p><strong>Ticket Price:</strong> {{ number_format($event->ticket_price, 2) }}</p>
            @endif

            <!-- Registration CTA -->
            <div class="mt-4">
                <button type="button" class="btn btn-common" data-bs-toggle="modal" data-bs-target="#registerModal{{$event->id}}">
                Register Now
                </button>
            </div>
  

          </div>
        </div>

      </div>

        <!-- Sidebar -->
        <aside class="col-lg-4 col-md-12 col-xs-12 right-sidebar">
            <!-- Posts slider Widget -->
            <div class="widget">
                <h5 class="widget-title">Upcoming Events</h5>
                <div id="post-carousel" class="post-slide">
                    @forelse($upcomingEvents as $upcomingEvent)
                        <div class="item">
                            <a class="lightbox" href="{{ asset('storage/' . $upcomingEvent->banner_image) }}">
                                <img src="{{ asset('storage/' . $upcomingEvent->banner_image) }}" alt="{{ $upcomingEvent->title }}">
                            </a>
                            <div class="post-content">  
                                <div class="meta">
                                    <span class="meta-part">
                                        <i class="lni-calendar"></i> 
                                        {{ \Carbon\Carbon::parse($upcomingEvent->start_time)->format('F d, Y') }}
                                    </span>
                                    <span class="meta-part">
                                        <i class="lni-ticket-alt"></i> {{ ucfirst($upcomingEvent->event_type) }}
                                    </span>
                                </div>                 
                                <h3>
                                    <a href="{{ route('frontend.events.show', $upcomingEvent->id) }}">
                                        {{ Str::limit($upcomingEvent->title, 60) }}
                                    </a>
                                </h3>
                                <p>{{ Str::limit(strip_tags($upcomingEvent->description), 100) }}</p>
                            </div>
                        </div>
                    @empty
                        <p class="text-muted">No upcoming events at the moment.</p>
                    @endforelse
                </div>
            </div>
        </aside>


    </div>
  </div>
</section>
<!-- End Content -->

<!-- Registration Modal -->
<div class="modal fade" id="registerModal{{$event->id}}" tabindex="-1" aria-labelledby="registerModalLabel{{$event->id}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="{{ route('frontend.events.register', $event->id) }}">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title" id="registerModalLabel{{$event->id}}">Register for {{ $event->title }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Registration Fields -->
            <div class="mb-3">
              <label for="name{{$event->id}}" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
              <label for="email{{$event->id}}" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
              <label for="phone{{$event->id}}" class="form-label">Phone</label>
              <input type="text" class="form-control" name="phone">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-common">Submit</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  

@endsection
