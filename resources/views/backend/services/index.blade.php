@extends('layouts.admin')
@section('content')


<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Services</h3>
            <p class="text-subtitle text-muted">Manage Services here.</p>
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

<section class="section">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">Services Table</h5>
            <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> New Service
            </a>
        </div>

        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Short Description</th>
                        <th>Status</th>
                        <th>Featured</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                    <tr>
                        <td>{{ $service->title }}</td>
                        <td>{{ Str::limit($service->short_description, 50) }}</td>
                        <td>
                            <span class="badge bg-{{ $service->status === 'active' ? 'success' : 'secondary' }}">
                                {{ ucfirst($service->status) }}
                            </span>
                        </td>
                        <td>
                            @if($service->is_featured)
                                <span class="badge bg-primary">Yes</span>
                            @else
                                <span class="badge bg-light text-dark">No</span>
                            @endif
                        </td>
                        <td>
                            @if($service->image)
                                <img src="{{ asset('storage/' . $service->image) }}" alt="Service Image" style="height: 40px;">
                            @else
                                <em class="text-muted">No image</em>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.services.edit', $service->id) }}" title="Edit" class="mx-1">
                                <i class="bi bi-pencil-square text-warning"></i>
                            </a>
                            <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure?')">
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
