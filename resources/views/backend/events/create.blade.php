@extends('layouts.admin')
@section('content')


<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>About Us</h3>
            <p class="text-subtitle text-muted">Manage company About Us here.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">About Us Form</h4>
                </div>
                @include('alert-messages')
                <div class="card-content">
                    <div class="card-body">

                        <form action="{{ route('admin.event.store') }}"
                            method="POST"
                            enctype="multipart/form-data"
                            class="form form-horizontal">
                            @csrf

                            <div class="form-body">
                                <div class="row">

                                    <div class="col-md-4">
                                        <label for="title">Event Title</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="title" class="form-control" name="title"
                                            value="{{ old('title') }}" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="organizer">Organizer</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="organizer" class="form-control" name="organizer"
                                            value="{{ old('organizer') }}">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="event_type">Event Type</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select name="event_type" id="event_type" class="form-control">
                                            <option value="">Select Type</option>
                                            <option value="In-person" {{ old('event_type') === 'In-person' ? 'selected' : '' }}>In-person</option>
                                            <option value="Online" {{ old('event_type') === 'Online' ? 'selected' : '' }}>Online</option>
                                            <option value="Hybrid" {{ old('event_type') === 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="location">Location</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="location" class="form-control" name="location"
                                            value="{{ old('location') }}">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="start_time">Start Time</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="datetime-local" id="start_time" class="form-control" name="start_time"
                                            value="{{ old('start_time') }}" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="end_time">End Time</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="datetime-local" id="end_time" class="form-control" name="end_time"
                                            value="{{ old('end_time') }}">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="time_zone">Time Zone</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="time_zone" class="form-control" name="time_zone"
                                            value="{{ old('time_zone', config('app.timezone')) }}">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="capacity">Capacity</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="number" id="capacity" class="form-control" name="capacity"
                                            value="{{ old('capacity') }}">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="is_free">Is Free?</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select name="is_free" id="is_free" class="form-control">
                                            <option value="1" {{ old('is_free') === '1' ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ old('is_free') === '0' ? 'selected' : '' }}>No</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="ticket_price">Ticket Price (if not free)</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="number" step="0.01" id="ticket_price" class="form-control" name="ticket_price"
                                            value="{{ old('ticket_price') }}">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="banner_image">Banner Image</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="file" id="banner_image" class="form-control" name="banner_image">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="description">Description</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <textarea id="description" class="form-control" name="description" rows="5">{{ old('description') }}</textarea>
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Create Event</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>

                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-md-4 col-12">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="card-title mb-0">{{ $company ? $company->name:"Add Your Comapny Info" }}</h4>
                    <h6 class="card-subtitle text-muted mt-1">{{ $company ? $company->tagline: "" }}</h6>
                </div>
                
                <div class="card-content">
                    <div class="card-body">
                
                        @if (!empty($company->logo))
                            <div class="text-center mb-3">
                                <img src="{{ asset('storage/' . $company->logo) }}" alt="Company Logo"
                                     style="max-height: 150px; object-fit: contain;">
                            </div>
                        @else
                            <div class="text-center mb-3 text-muted">
                                <p>No logo uploaded</p>
                            </div>
                        @endif
                
                    </div>
                </div>
                
            </div>
        </div> --}}
    </div>
</section>
<!-- // Basic Horizontal form layout section end -->
@endsection
