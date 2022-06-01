@extends('layouts.skeleton')
@section('app')
<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
                <img src="../assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle" />
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Register {{ env('APP_NAME') }}</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="form-group">
                            <label for="email">Name</label>
                            <input
                                id="name"
                                type="name"
                                class="form-control"
                                name="name"
                                tabindex="1"
                                required
                                autofocus
                            />
                            <div class="invalid-feedback">
                                Please fill in your name
                            </div>
                        </div>

                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input
                                id="email"
                                type="email"
                                class="form-control"
                                name="email"
                                tabindex="1"
                                required
                                autofocus
                            />
                            <div class="invalid-feedback">
                                Please fill in your Email
                            </div>
                        </div>

                        <!-- Username -->
                        <div class="form-group">
                            <label for="email">Username</label>
                            <input
                                id="username"
                                type="username"
                                class="form-control"
                                name="username"
                                tabindex="1"
                                required
                                autofocus
                            />
                            <div class="invalid-feedback">
                                Please fill in your username
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input
                                id="password"
                                type="password"
                                class="form-control"
                                name="password"
                                tabindex="1"
                                required 
                                autocomplete="new-password"
                            />
                            <div class="invalid-feedback">
                                Please fill in your Password
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group">
                            <label for="password">Password Confirmation</label>
                            <input
                                id="password_confirmation"
                                type="password"
                                class="form-control"
                                name="password_confirmation"
                                tabindex="1"
                                required 
                                autocomplete="new-password_confirmation"
                            />
                            <div class="invalid-feedback">
                                Please fill in your Password
                            </div>
                        </div>

                        <div class="form-group">
                            <button
                                type="submit"
                                class="btn btn-primary btn-lg btn-block"
                                tabindex="4"
                            >
                                Register
                            </button>
                        </div>
                    </form>
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection