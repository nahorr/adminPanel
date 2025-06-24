@extends('layouts.auth')

@section('content') 
    
<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <div class="form-group position-relative has-icon-left mb-4">
        <input id="email" type="email" 
                class="form-control form-control-xl @error('email') is-invalid @enderror" 
                name="email" value="{{ old('email') }}" 
                placeholder="Email" required autocomplete="email" autofocus>
        <div class="form-control-icon">
            <i class="bi bi-envelope"></i>
        </div>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
        {{ __('Send Password Reset Link') }}
    </button>
</form>

@endsection
