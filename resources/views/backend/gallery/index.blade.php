@extends('layouts.admin')
@section('content')


<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Gallery</h3>
            <p class="text-subtitle text-muted">Manage images here.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Our Gallery</h5>
                    <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> New Image(s)
                    </a>
                </div>

                <div class="card-body">
                    @if($gallery->isEmpty())
                        <p class="text-center text-muted">No images uploaded yet.</p>
                    @else
                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                            @foreach($gallery as $index => $item)
                                <div class="col-6 col-sm-6 col-lg-3 mt-2 mb-2">
                                    <a href="#">
                                        <img class="w-100 border rounded p-1 {{ $index === 0 ? 'active' : '' }}"
                                            src="{{ asset('storage/' . $item->image_path) }}"
                                            data-bs-target="#Gallerycarousel"
                                            data-bs-slide-to="{{ $index }}">

                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@if($gallery->isNotEmpty())
<!-- Single Modal for All Images -->
<div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Gallery Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div id="Gallerycarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach($gallery as $index => $item)
                            <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="{{ $index }}"
                                class="{{ $index === 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach($gallery as $index => $item)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}" data-gallery-id="{{ $item->id }}">
                                <img class="d-block w-100" src="{{ asset('storage/' . $item->image_path) }}">

                                <div class="d-flex justify-content-end gap-2 mt-2">
                                    <!-- Edit Button -->
                                    <button type="button"
                                            class="btn btn-sm btn-outline-primary"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editImageModal{{ $item->id }}"
                                            onclick="event.stopPropagation()">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </button>

                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.gallery.destroy', $item->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this image?')"
                                        onclick="event.stopPropagation();">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    {{-- <a class="carousel-control-prev" href="#Gallerycarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#Gallerycarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a> --}}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endif


@foreach($gallery as $item)
<!-- Edit Modal for Image ID: {{ $item->id }} -->
<div class="modal fade" id="editImageModal{{ $item->id }}" tabindex="-1" aria-labelledby="editImageModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('admin.gallery.update', $item->id) }}" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf
            @method('PUT')
            <div class="modal-header">
                <h5 class="modal-title" id="editImageModalLabel{{ $item->id }}">Edit Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                    <label for="title{{ $item->id }}" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title{{ $item->id }}" name="title" value="{{ $item->title }}">
                </div>

                <div class="mb-3">
                    <label for="description{{ $item->id }}" class="form-label">Description</label>
                    <textarea class="form-control" id="description{{ $item->id }}" name="description" rows="3">{{ $item->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image{{ $item->id }}" class="form-label">Replace Image</label>
                    <input type="file" class="form-control" id="image{{ $item->id }}" name="image">
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </form>
    </div>
</div>
@endforeach



@endsection
