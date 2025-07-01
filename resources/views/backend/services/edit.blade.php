@extends('layouts.admin')
@section('content')


<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Services</h3>
            <p class="text-subtitle text-muted">Manage your services here.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create New Service</h4>
                </div>
                @include('alert-messages')
                <div class="card-content">
                    <div class="card-body">

                        <form action="{{ route('admin.services.update', $service->id) }}"
                            method="POST"
                            enctype="multipart/form-data"
                            class="form form-horizontal">
                          @csrf
                          @method('PUT')
                      
                          <div class="form-body">
                              <div class="row">
                      
                                  <div class="col-md-4">
                                      <label for="title">Service Title</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="title" class="form-control" name="title"
                                             value="{{ old('title', $service->title) }}" required>
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="slug">Slug</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="slug" class="form-control" name="slug"
                                             value="{{ old('slug', $service->slug) }}">
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="short_description">Short Description</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="short_description" class="form-control"
                                             name="short_description"
                                             value="{{ old('short_description', $service->short_description) }}">
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="description">Full Description</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <textarea id="summernote" class="form-control rich-text" name="description" rows="5">
                                          {{ old('description', $service->description) }}
                                      </textarea>
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="icon">Icon</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="icon" class="form-control icon-picker" name="icon"
                                             value="{{ old('icon', $service->icon) }}" placeholder="bi bi-gear">
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="image">Service Image</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="file" id="image" class="form-control" name="image">
                                      @if($service->image)
                                          <div class="mt-2">
                                              <img src="{{ asset('storage/' . $service->image) }}" alt="Service Image" style="max-height: 100px;">
                                          </div>
                                      @endif
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="is_featured">Featured?</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <select name="is_featured" id="is_featured" class="form-control">
                                          <option value="0" {{ old('is_featured', $service->is_featured) == '0' ? 'selected' : '' }}>No</option>
                                          <option value="1" {{ old('is_featured', $service->is_featured) == '1' ? 'selected' : '' }}>Yes</option>
                                      </select>
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="status">Status</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <select name="status" id="status" class="form-control">
                                          <option value="active" {{ old('status', $service->status) == 'active' ? 'selected' : '' }}>Active</option>
                                          <option value="inactive" {{ old('status', $service->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                      </select>
                                  </div>
                      
                                  <div class="col-sm-12 d-flex justify-content-end">
                                      <button type="submit" class="btn btn-primary me-1 mb-1">Update Service</button>
                                      <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                  </div>
                      
                              </div>
                          </div>
                      </form>
                      

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
