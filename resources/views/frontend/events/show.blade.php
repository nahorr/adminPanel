@extends('layouts.app')
@section('content')

<!-- Start Content -->
<section id="content" class="section">
  <div class="container">
    <div class="row">
      <!-- Main Content -->
      <div class="col-lg-8 col-md-12 col-xs-12">
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
                <button type="button" class="btn btn-common" data-bs-toggle="modal" data-bs-target="#registerModal">
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
                    @forelse($upcomingEvents as $event)
                        <div class="item">
                            <a class="lightbox" href="{{ asset('storage/' . $event->banner_image) }}">
                                <img src="{{ asset('storage/' . $event->banner_image) }}" alt="{{ $event->title }}">
                            </a>
                            <div class="post-content">  
                                <div class="meta">
                                    <span class="meta-part">
                                        <i class="lni-calendar"></i> 
                                        {{ \Carbon\Carbon::parse($event->start_time)->format('F d, Y') }}
                                    </span>
                                    <span class="meta-part">
                                        <i class="lni-ticket-alt"></i> {{ ucfirst($event->event_type) }}
                                    </span>
                                </div>                 
                                <h3>
                                    <a href="{{ route('frontend.events.show', $event->id) }}">
                                        {{ Str::limit($event->title, 60) }}
                                    </a>
                                </h3>
                                <p>{{ Str::limit(strip_tags($event->description), 100) }}</p>
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
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{ route('frontend.events.register', $event->id) }}" method="POST">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title" id="registerModalLabel">Register for {{ $event->title }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            @if(session('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
            @endif
  
            <div class="mb-3">
              <label for="name" class="form-label">Your Name</label>
              <input type="text" class="form-control" name="name" required>
            </div>
  
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" name="email" required>
            </div>
  
            <div class="mb-3">
              <label for="phone" class="form-label">Phone (optional)</label>
              <input type="text" class="form-control" name="phone">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit Registration</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  

@endsection
