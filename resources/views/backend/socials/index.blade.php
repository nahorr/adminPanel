@extends('layouts.admin')
@section('content')

<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Social Links</h3>
            <p class="text-subtitle text-muted">Manage social media URLs here.</p>
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

<section class="section">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">Social Links Table</h5>
            <a href="{{ route('admin.socials.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Add Social Link
            </a>
        </div>

        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Platform</th>
                        <th>URL</th>
                        <th>Icon</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($socials as $social)
                    <tr>
                        <td>{{ $social->platform }}</td>
                        <td>
                            <a href="{{ $social->url }}" target="_blank">{{ $social->url }}</a>
                        </td>
                        <td>
                            @if($social->icon_class)
                                <i class="{{ $social->icon_class }}"></i> <small class="text-muted">{{ $social->icon_class }}</small>
                            @else
                                <em class="text-muted">None</em>
                            @endif
                        </td>
                        <td>
                            <span class="badge bg-{{ $social->is_active ? 'success' : 'secondary' }}">
                                {{ $social->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.socials.edit', $social->id) }}" title="Edit" class="mx-1">
                                <i class="bi bi-pencil-square text-warning"></i>
                            </a>
                            <form action="{{ route('admin.socials.destroy', $social->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this link?')">
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
