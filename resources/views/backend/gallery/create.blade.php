@extends('layouts.admin')
@section('content')


<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Gallery</h3>
            <p class="text-subtitle text-muted">Add new images</p>
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

<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Gallery Form</h4>
                </div>
                @include('alert-messages')
                <div class="card-content">
                    <div class="card-body">

                        <form action="{{ route('admin.gallery.store') }}"
                            method="POST"
                            enctype="multipart/form-data"
                            class="form form-horizontal">
                            @csrf

                            <div class="form-body">
                                <div class="row">

                                    <div class="col-md-4">
                                        <label for="title">Title</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="title" class="form-control" name="title" value="{{ old('title') }}">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="description">Description</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <textarea id="description" class="form-control" name="description">{{ old('description') }}</textarea>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="images">Upload Images</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="file" id="images" class="form-control" name="images[]" multiple required>
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Upload</button>
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
