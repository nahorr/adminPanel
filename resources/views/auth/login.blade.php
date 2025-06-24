@extends('layouts.auth')
@section('content')

<form method="POST" action="{{ route('login') }}">
    @csrf

    {{-- Email or Username --}}
    <div class="form-group position-relative has-icon-left mb-4">
        <input id="email" type="email"
               class="form-control form-control-xl @error('email') is-invalid @enderror"
               name="email" value="{{ old('email') }}" placeholder="Email Address" required autofocus>
        <div class="form-control-icon">
            <i class="bi bi-person"></i>
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
               name="password" placeholder="Password" required autocomplete="current-password">
        <div class="form-control-icon">
            <i class="bi bi-shield-lock"></i>
        </div>
        @error('password')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    {{-- Remember Me --}}
    <div class="form-check form-check-lg d-flex align-items-end">
        <input class="form-check-input me-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label text-gray-600" for="remember">
            Keep me logged in
        </label>
    </div>

    {{-- Submit Button --}}
    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
        Log in
    </button>
</form>

    
@endsection
