@extends('layouts.admin')
@section('content')

<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Social Links</h3>
            <p class="text-subtitle text-muted">Add new social media links.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Socials</li>
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
                    <h4 class="card-title">Add Social Link</h4>
                </div>
                @include('alert-messages')
                <div class="card-content">
                    <div class="card-body">

                        <form action="{{ route('admin.socials.store') }}"
                              method="POST"
                              class="form form-horizontal">
                            @csrf

                            <div class="form-body">
                                <div class="row">

                                    <div class="col-md-4">
                                        <label for="platform">Platform</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="platform" class="form-control" name="platform"
                                               value="{{ old('platform') }}" placeholder="e.g. Facebook, Twitter" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="url">Profile URL</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="url" id="url" class="form-control" name="url"
                                               value="{{ old('url') }}" placeholder="https://facebook.com/yourpage" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="icon_class">Icon Class</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="icon_class" class="form-control icon-picker" name="icon_class"
                                               value="{{ old('icon_class') }}" placeholder="e.g. bi bi-facebook">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="is_active">Status</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select name="is_active" id="is_active" class="form-control">
                                            <option value="1" {{ old('is_active') == '1' ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Add Link</button>
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
