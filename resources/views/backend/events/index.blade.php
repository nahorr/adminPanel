@extends('layouts.admin')
@section('content')


<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Events</h3>
            <p class="text-subtitle text-muted">Manage Events here.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Events</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<section class="section">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">Events Table</h5>
            <a href="{{ route('admin.event.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> New Event
            </a>
        </div>
        
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Organizer</th>
                        <th>Type</th> <!-- Online / In-person -->
                        <th>Location</th>
                        <th>Start Time</th>
                        <th>Capacity</th>
                        <th>Registered</th>
                        <th>Status</th> <!-- Upcoming / Ongoing / Past -->
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                   
                    @foreach($events as $event)
                    <tr>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->organizer }}</td>
                        <td>{{ $event->event_type }}</td>
                        <td>{{ $event->location }}</td>
                        <td>{{ \Carbon\Carbon::parse($event->start_time)->format('Y-m-d h:i A') }}</td>
                        <td>{{ $event->capacity ?? '—' }}</td>
                        <td>{{ $event->registered_count ?? 0 }}</td>
                        <td>
                            @php
                                $now = \Carbon\Carbon::now($event->time_zone);
                                if ($event->end_time && $event->end_time < $now) {
                                    $status = 'Past';
                                } elseif ($event->start_time > $now) {
                                    $status = 'Upcoming';
                                } else {
                                    $status = 'Ongoing';
                                }
                            @endphp
                            <span class="badge bg-{{ $status == 'Upcoming' ? 'primary' : ($status == 'Ongoing' ? 'success' : 'secondary') }}">
                                {{ $status }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.event.edit', $event->id) }}" title="View/Edit" class="mx-1">
                                <i class="bi bi-pencil-square text-warning"></i>
                            </a>
                            <form action="{{ route('admin.event.destroy', $event->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border: none; background: transparent;" title="Delete">
                                    <i class="bi bi-trash text-danger"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</section>

@endsection
