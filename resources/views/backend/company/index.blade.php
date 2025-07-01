@extends('layouts.admin')
@section('content')


<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Company</h3>
            <p class="text-subtitle text-muted">Manage company information here.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Company</li>
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
                    <h4 class="card-title">Company Form</h4>
                </div>
                @include('alert-messages')
                <div class="card-content">
                    <div class="card-body">

                        <form action="{{ $company ? route('admin.company.update', $company->id) : route('admin.company.store') }}"
                            method="POST"
                            enctype="multipart/form-data"
                            class="form form-horizontal">
                          @csrf
                          @if($company)
                              @method('PUT')
                          @endif
                      
                          <div class="form-body">
                              <div class="row">
                      
                                  <div class="col-md-4">
                                      <label for="name">Company Name</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="name" class="form-control" name="name"
                                             value="{{ old('name', $company->name ?? '') }}" required>
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="tagline">Tagline</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="tagline" class="form-control" name="tagline"
                                             value="{{ old('tagline', $company->tagline ?? '') }}">
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="logo">Logo</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="file" id="logo" class="form-control" name="logo">
                                      @if(isset($company->logo))
                                          <img src="{{ asset('storage/' . $company->logo) }}" alt="Logo" style="max-height: 50px; margin-top: 10px;">
                                      @endif
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="email">Email</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="email" id="email" class="form-control" name="email"
                                             value="{{ old('email', $company->email ?? '') }}">
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="phone">Phone</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="phone" class="form-control" name="phone"
                                             value="{{ old('phone', $company->phone ?? '') }}">
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="alt_phone">Alternate Phone</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="alt_phone" class="form-control" name="alt_phone"
                                             value="{{ old('alt_phone', $company->alt_phone ?? '') }}">
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="website">Website</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="url" id="website" class="form-control" name="website"
                                             value="{{ old('website', $company->website ?? '') }}">
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="address">Address</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="address" class="form-control" name="address"
                                             value="{{ old('address', $company->address ?? '') }}">
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="city">City</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="city" class="form-control" name="city"
                                             value="{{ old('city', $company->city ?? '') }}">
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="state">State</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="state" class="form-control" name="state"
                                             value="{{ old('state', $company->state ?? '') }}">
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="country">Country</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="country" class="form-control" name="country"
                                             value="{{ old('country', $company->country ?? '') }}">
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="postal_code">Postal Code</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="postal_code" class="form-control" name="postal_code"
                                             value="{{ old('postal_code', $company->postal_code ?? '') }}">
                                  </div>
                      
                                  <div class="col-md-4">
                                      <label for="registration_number">Registration Number</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="registration_number" class="form-control" name="registration_number"
                                             value="{{ old('registration_number', $company->registration_number ?? '') }}">
                                  </div>
                      
                                  <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">
                                        {{ $company ? 'Update' : 'Submit' }}
                                    </button>
                                
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                
                                </div>
                                
                      
                              </div>
                          </div>
                      </form>

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
