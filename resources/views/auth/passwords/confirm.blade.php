@extends('layouts.auth')

@section('content')

<form method="POST" action="{{ route('password.confirm') }}">
    @csrf

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

    {{-- Submit Button & Forgot Link --}}
    <div class="d-flex justify-content-between align-items-center mt-4">
        <button type="submit" class="btn btn-primary btn-lg shadow-lg">
            {{ __('Confirm Password') }}
        </button>

        @if (Route::has('password.request'))
            <a class="btn btn-link text-decoration-none" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </div>
</form>

                
@endsection
