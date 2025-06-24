@extends('layouts.auth')
@section('content')

<form method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">

    {{-- Email --}}
    <div class="form-group position-relative has-icon-left mb-4">
        <input id="email" type="email"
               class="form-control form-control-xl @error('email') is-invalid @enderror"
               name="email" value="{{ $email ?? old('email') }}" placeholder="Email Address" required autofocus>
        <div class="form-control-icon">
            <i class="bi bi-person"></i>
        </div>
        @error('email')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    {{-- New Password --}}
    <div class="form-group position-relative has-icon-left mb-4">
        <input id="password" type="password"
               class="form-control form-control-xl @error('password') is-invalid @enderror"
               name="password" placeholder="New Password" required autocomplete="new-password">
        <div class="form-control-icon">
            <i class="bi bi-shield-lock"></i>
        </div>
        @error('password')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    {{-- Confirm New Password --}}
    <div class="form-group position-relative has-icon-left mb-4">
        <input id="password-confirm" type="password"
               class="form-control form-control-xl"
               name="password_confirmation" placeholder="Confirm New Password" required autocomplete="new-password">
        <div class="form-control-icon">
            <i class="bi bi-shield-lock-fill"></i>
        </div>
    </div>

    {{-- Submit Button --}}
    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
        {{ __('Reset Password') }}
    </button>
</form>

                
@endsection
