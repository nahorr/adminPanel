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

                        <form action="{{ $about ? route('admin.about.us.update', $about->id) : route('admin.about.us.store') }}"
                            method="POST"
                            enctype="multipart/form-data"
                            class="form form-horizontal">
                          @csrf
                          @if($about)
                              @method('PUT')
                          @endif
                      
                          <div class="form-body">
                              <div class="row">
                      
                                  <div class="col-md-4">
                                      <label for="title">Page Title</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="title" class="form-control" name="title"
                                             value="{{ old('title', $about->title ?? '') }}" required>
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="mission">Mission</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <textarea id="mission" class="form-control" name="mission">{{ old('mission', $about->mission ?? '') }}</textarea>
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="vision">Vision</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <textarea id="vision" class="form-control" name="vision">{{ old('vision', $about->vision ?? '') }}</textarea>
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="values">Core Values</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <textarea id="values" class="form-control" name="values">{{ old('values', $about->values ?? '') }}</textarea>
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="history">History</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <textarea id="history" class="form-control" name="history">{{ old('history', $about->history ?? '') }}</textarea>
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="content">Page Content</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <textarea id="content" class="form-control" name="content" rows="6">{{ old('content', $about->content ?? '') }}</textarea>
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="banner_image">Banner Image</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="file" id="banner_image" class="form-control" name="banner_image">
                                      @if(!empty($about->banner_image))
                                          <img src="{{ asset('storage/' . $about->banner_image) }}" style="max-height: 80px; margin-top: 10px;">
                                      @endif
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="about_image">About Image</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="file" id="about_image" class="form-control" name="about_image">
                                      @if(!empty($about->about_image))
                                          <img src="{{ asset('storage/' . $about->about_image) }}" style="max-height: 80px; margin-top: 10px;">
                                      @endif
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="team_images">Team Images (multiple)</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="file" id="team_images" class="form-control" name="team_images[]" multiple>
                                      @if(!empty($about->team_images))
                                          @foreach(json_decode($about->team_images, true) as $img)
                                              <img src="{{ asset('storage/' . $img) }}" style="height: 60px; margin: 4px;">
                                          @endforeach
                                      @endif
                                  </div>
                      
                                  <div class="col-sm-12 d-flex justify-content-end">
                                      <button type="submit" class="btn btn-primary me-1 mb-1">
                                          {{ $about ? 'Update' : 'Submit' }}
                                      </button>
                                      <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                  </div>
                      
                              </div>
                          </div>
                      </form>
                      
                      
                        @if ($company)
                            <form action="{{ route('admin.company.destroy', $company->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this company?');" class="ms-1">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mb-1">Delete</button>
                            </form>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12">
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
        </div>
    </div>
</section>
<!-- // Basic Horizontal form layout section end -->
@endsection
