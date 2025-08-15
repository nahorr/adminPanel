@extends('layouts.admin')
@section('content')

<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Teams</h3>
            <p class="text-subtitle text-muted">Manage team members here.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Teams</li>
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
                    <h4 class="card-title mb-0">Create Team Member</h4>
                </div>

                @include('alert-messages')

                <div class="card-content">
                    <div class="card-body">
                        <form action="{{ route('admin.team.store') }}"
                              method="POST"
                              enctype="multipart/form-data"
                              class="form form-horizontal">
                            @csrf

                            <div class="form-body">
                                <div class="row">

                                    <div class="col-md-4">
                                        <label for="name">Name <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="name" class="form-control" name="name"
                                               value="{{ old('name') }}" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="position">Position/Role</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="position" class="form-control" name="position"
                                               value="{{ old('position') }}">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="image">Photo</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="file" id="image" class="form-control" name="image"
                                               accept=".jpg,.jpeg,.png,.webp">
                                        <small class="text-muted d-block mt-1">JPG/PNG/WebP, max 3MB.</small>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="about">About / Bio</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <textarea id="about" class="form-control" name="about" rows="5">{{ old('about') }}</textarea>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="sort_order">Display Order</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="number" id="sort_order" class="form-control" name="sort_order"
                                               value="{{ old('sort_order', 0) }}" min="0">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="is_active">Status</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select name="is_active" id="is_active" class="form-control">
                                            <option value="1" {{ old('is_active', '1') == '1' ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Create Member</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>

                                </div> <!-- /.row -->
                            </div> <!-- /.form-body -->
                        </form>
                    </div>
                </div>

            </div>
        </div>

        {{-- Optional side card can remain commented or repurposed for preview --}}
        {{-- <div class="col-md-4 col-12"> ... </div> --}}
    </div>
</section>
<!-- // Basic Horizontal form layout section end -->
@endsection
