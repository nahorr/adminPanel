
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - {{ $company->name ?? ''}} Admin Dashboard</title>
        <link rel="shortcut icon" href="{{ asset('backend/assets/compiled/svg/favicon.svg') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('backend/assets/compiled/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/compiled/css/app-dark.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/compiled/css/auth.css') }}">
    </head>

    <body>
        <div id="auth">
            <div class="row h-100">
                <div class="col-lg-5 col-12">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div id="auth-left">
                        <div class="auth-logo">
                            <a href="{{ route('frontend.index') }}">
                                <img src="{{ $company && $company->logo ? Storage::url($company->logo) : asset('backend/assets/compiled/svg/logo.svg') }}"
                                alt="{{ $company->name ?? '' }}">
                            </a>
                        </div>

                        @if (Route::is('login'))
                            <h1 class="auth-title">Log in.</h1>
                            <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>
                        @elseif (Route::is('register'))
                            <h1 class="auth-title">Sign Up</h1>
                            <p class="auth-subtitle mb-5">Input your data to register to our website.</p>
                        @elseif (Route::is('password.request'))
                            <h1 class="auth-title">Forgot Password</h1>
                            <p class="auth-subtitle mb-5">Enter your email and we'll send you a password reset link.</p>
                        @elseif (Route::is('password.reset') || Route::is('password.update'))
                            <h1 class="auth-title">Reset Password</h1>
                            <p class="auth-subtitle mb-5">Enter your new password below to complete the reset.</p>
                        @elseif (Route::is('password.confirm'))
                            <h1 class="auth-title">Confirm Password</h1>
                            <p class="auth-subtitle mb-5">Please confirm your password before continuing.</p>
                        @endif

                        @yield('content')

                        @if (Route::is('login'))
                            <div class="text-center mt-5 text-lg fs-4">
                                <p class="text-gray-600">
                                    Don't have an account? <a href="{{ route('register') }}" class="font-bold">Sign up</a>.
                                </p>
                                <p>
                                    <a class="font-bold" href="{{ route('password.request') }}">Forgot password?</a>.
                                </p>
                            </div>
                        @elseif (Route::is('register'))
                            <div class="text-center mt-5 text-lg fs-4">
                                <p class="text-gray-600">
                                    Already have an account? <a href="{{ route('login') }}" class="font-bold">Log in</a>.
                                </p>
                            </div>
                        @elseif (Route::is('password.request') || Route::is('password.reset') || Route::is('password.update') || Route::is('password.confirm'))
                            <div class="text-center mt-5 text-lg fs-4">
                                <p class="text-gray-600">
                                    Return to <a href="{{ route('login') }}" class="font-bold">Log in</a>.
                                </p>
                            </div>
                        @endif

                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block">
                    <div id="auth-right">
        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>