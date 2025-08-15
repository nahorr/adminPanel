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

<section class="section">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">Teams Table</h5>
            <a href="{{ route('admin.team.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> New Member
            </a>
        </div>

        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>About</th>
                        <th>Order</th>
                        <th>Status</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($teams as $team)
                        <tr>
                            <td style="width:60px;">
                                <img
                                    src="{{ $team->image_path ? Storage::disk('public')->url($team->image_path) : asset('images/avatar-placeholder.png') }}"
                                    alt="{{ $team->name }}"
                                    class="rounded-circle"
                                    style="width:40px;height:40px;object-fit:cover;">
                            </td>
                            <td class="fw-semibold">{{ $team->name }}</td>
                            <td>{{ $team->position ?? '—' }}</td>
                            <td>
                                {{ \Illuminate\Support\Str::limit(strip_tags($team->about ?? ''), 70) ?: '—' }}
                            </td>
                            <td>{{ $team->sort_order }}</td>
                            <td>
                                <span class="badge {{ $team->is_active ? 'bg-success' : 'bg-secondary' }}">
                                    {{ $team->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('admin.team.edit', $team->id) }}" title="View/Edit" class="mx-1">
                                    <i class="bi bi-pencil-square text-warning"></i>
                                </a>
                                <form action="{{ route('admin.team.destroy', $team->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Delete this member?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="border: none; background: transparent;" title="Delete">
                                        <i class="bi bi-trash text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted">No team members yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
