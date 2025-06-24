@extends('layouts.auth')
@section('content')

<form method="POST" action="{{ route('register') }}">
    @csrf

    {{-- Name --}}
    <div class="form-group position-relative has-icon-left mb-4">
        <input id="name" type="text"
            class="form-control form-control-xl @error('name') is-invalid @enderror"
            name="name" value="{{ old('name') }}" placeholder="Full Name" required autocomplete="name">
        <div class="form-control-icon">
            <i class="bi bi-person"></i>
        </div>
        @error('name')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>


    {{-- Email --}}
    <div class="form-group position-relative has-icon-left mb-4">
        <input id="email" type="email"
               class="form-control form-control-xl @error('email') is-invalid @enderror"
               name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
        <div class="form-control-icon">
            <i class="bi bi-envelope"></i>
        </div>
        @error('email')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    {{-- Password --}}
    <div class="form-group position-relative has-icon-left mb-4">
        <input id="password" type="password"
               class="form-control form-control-xl @error('password') is-invalid @enderror"
               name="password" placeholder="Password" required autocomplete="new-password">
        <div class="form-control-icon">
            <i class="bi bi-shield-lock"></i>
        </div>
        @error('password')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    {{-- Confirm Password --}}
    <div class="form-group position-relative has-icon-left mb-4">
        <input id="password-confirm" type="password"
               class="form-control form-control-xl"
               name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
        <div class="form-control-icon">
            <i class="bi bi-shield-lock"></i>
        </div>
    </div>

    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
</form>


@endsection
