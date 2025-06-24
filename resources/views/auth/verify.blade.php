@extends('layouts.auth')

@section('content')
    <h1 class="auth-title">Verify Your Email Address</h1>

    <p class="auth-subtitle mb-4">
        Before proceeding, please check your email for a verification link.
        If you did not receive the email, click the button below.
    </p>

    @if (session('status') == 'verification-link-sent')
        <div class="alert alert-success" role="alert">
            A new verification link has been sent to your email address.
        </div>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="btn btn-primary">
            Resend Verification Email
        </button>
    </form>
    
@endsection
