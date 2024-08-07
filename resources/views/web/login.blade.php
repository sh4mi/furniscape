@extends('web.layouts.app')
@section('content')
<section class="mt-0 overflow-hidden  vh-100 d-flex justify-content-center align-items-center p-4">
    <!-- Page Content Goes Here -->

    <!-- Login Form-->
    <div class="col col-md-8 col-lg-6 col-xxl-5">
        <!-- Logo-->
        <a class="navbar-brand fw-bold fs-3 flex-shrink-0 order-0 align-self-center justify-content-center d-flex mx-0 px-0"
            href="./index.html">
            <div class="d-flex align-items-center">
                <svg class="f-w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.53 72.26">
                    <path
                        d="M10.43,54.2h0L0,36.13,10.43,18.06,20.86,0H41.72L10.43,54.2Zm67.1-7.83L73,54.2,68.49,62,45,48.47,31.29,72.26H20.86l-5.22-9L52.15,0H62.58l5.21,9L54.06,32.82,77.53,46.37Z"
                        fill="currentColor" fill-rule="evenodd" />
                </svg>
            </div>
        </a>
        <!-- / Logo-->
        <div class="shadow-xl p-4 p-lg-5 bg-white">
            <h1 class="text-center fw-bold mb-5 fs-2">Login</h1>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="login-email">Email address</label>
                    <input type="email" required name="email" :value="old('email')" class="form-control"
                        id="login-email" placeholder="name@email.com">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="form-group">
                    <label for="login-password" class="form-label d-flex justify-content-between align-items-center">
                        Password
                        <a href="{{ route('password.request') }}" class="text-muted small">Forgot your password?</a>
                    </label>
                    <input type="password" name="password" required class="form-control" id="login-password"
                        placeholder="Enter your password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <button type="submit" class="btn btn-dark d-block w-100 my-4">Login</button>
            </form>
            <p class="d-block text-center text-muted">New customer? <a class="text-muted"
                    href="{{ route('signup') }}">Sign up
                    for an account</a></p>
        </div>

    </div>
    <!-- / Login Form-->

    <!-- /Page Content -->
</section>
<!-- / Main Section-->
@endsection