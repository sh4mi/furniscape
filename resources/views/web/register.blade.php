@extends('web.layouts.app')
@section('content')
<!-- Main Section-->
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
            <h1 class="text-center mb-5 fs-2 fw-bold">Open Account</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="register-fname">name</label>
                    <input type="text" class="form-control" id="register-fname" name="name" :value="old('name')"
                        required autofocus placeholder="Enter your name">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                </div>
                <div class="form-group">
                    <label class="form-label" for="register-email">Email address</label>
                    <input type="email" name="email" :value="old('email')" required class="form-control"
                        id="register-email" placeholder="name@email.com">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                </div>
                <div class="form-group">
                    <label class="form-label" for="register-password">Password</label>
                    <input type="password" name="password" required class="form-control" id="register-password"
                        placeholder="Enter your password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="form-group">
                    <label class="form-label" for="register-password">Confirm Password</label>
                    <input type="password" name="password_confirmation" required class="form-control"
                        id="register-password" placeholder="Enter your password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <button type="submit" class="btn btn-dark d-block w-100 my-4">Sign Up</button>
            </form>
            <p class="d-block text-center text-muted">Already registered? <a class="text-muted"
                    href="{{route('signin')}}">Login here.</a></p>
        </div>

    </div>
    <!-- / Login Form-->

    <!-- /Page Content -->
</section>
<!-- / Main Section-->
@endsection