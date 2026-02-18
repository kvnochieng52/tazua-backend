@extends('layouts.app')

@section('title', 'Register - Tazua Admin')

@section('content')
    <!-- REGISTER HERO SECTION -->
    <div id="register-hero" class="register-hero-section" style="background: white; padding-top: 120px; padding-bottom: 80px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="register-form-wrapper">
                        <div class="text-center mb-4">
                            <h2 class="register-title">Admin Registration</h2>
                            <p class="register-subtitle">Create an account to manage blog content</p>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name Field -->
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" id="name" name="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                    required autocomplete="name" autofocus>
                                @error('name')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <!-- Email Field -->
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    required autocomplete="email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <!-- Password Field -->
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" required
                                    autocomplete="new-password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <!-- Confirm Password Field -->
                            <div class="form-group mb-4">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="form-control" required autocomplete="new-password">
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-green btn-lg w-100">
                                    Create Account
                                </button>
                            </div>

                            <!-- Login Link -->
                            <div class="text-center">
                                <p class="mb-0">
                                    Already have an account?
                                    <a href="{{ route('login') }}" class="text-primary">Sign in here</a>
                                </p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        /* Fix navigation text color for white background pages */
        .navbar-dark .navbar-nav .nav-link {
            color: #333 !important;
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: #e5841d !important;
        }

        .navbar-dark .navbar-brand {
            color: #333 !important;
        }

        .navbar-toggler {
            border-color: #333 !important;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='m4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
        }

        .register-hero-section {
            min-height: calc(100vh - 120px);
            display: flex;
            align-items: center;
        }

        .register-form-wrapper {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: 1px solid #e9ecef;
        }

        .register-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
        }

        .register-subtitle {
            color: #666;
            font-size: 1.1rem;
            margin-bottom: 0;
        }

        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }

        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 12px 15px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #e5841d;
            box-shadow: 0 0 0 0.2rem rgba(229, 132, 29, 0.25);
        }

        .btn-lg {
            padding: 15px 30px;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .text-primary {
            color: #e5841d !important;
        }

        .text-primary:hover {
            color: #d67617 !important;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .register-form-wrapper {
                padding: 30px 20px;
            }

            .register-title {
                font-size: 2rem;
            }
        }
    </style>
@endpush
