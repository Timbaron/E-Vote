@extends('layouts.login')
@section('content')
<form class="form-login" action="{{route('login')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12 text-center mb-4">
            <img alt="logo" src="{{asset('imgf/logo-3.png')}}" class="theme-logo">
        </div>
        <div class="col-md-12">

            <div class="social text-center">
                <h5 class="mb-4">Sign in with</h5>
                <button type="button" class="btn btn-outline-primary rounded-circle mb-3 mr-2"><i class="flaticon-facebook-logo flaticon-circle-p"></i></button>
                <button type="button" class="btn btn-outline-info rounded-circle mb-3 mr-2"><i class="flaticon-twitter-logo flaticon-circle-p"></i></button>
                <button type="button" class="btn btn-outline-danger rounded-circle mb-3 mr-2"><i class="flaticon-google-plus-bold flaticon-circle-p"></i></button>
            </div>

            <div class="division mt-4 mb-5">
                <div class="line line-left"></div>
                    <span>or</span>
                <div class="line line-right"></div>
            </div>
            <div>
                @error('email')
                    <span style="color: red"><i><b>Invalid Email Address or Password</b></i></span>
                @enderror
            </div>
            <label for="inputEmail" class="">Email Address</label>
            <input type="email" id="inputEmail" name="email" class="form-control mb-4" placeholder="Login" required >
            <label for="inputPassword" class="">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control mb-5" placeholder="Password" required>

            <div class="checkbox d-flex justify-content-center mb-3">
                <div class="custom-control custom-checkbox mr-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" value="remember" name="remember">
                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                </div>
            </div>
            <button type="submit" class="btn btn-gradient-dark btn-rounded btn-block">Sign in</button>
            <div class="forgot-pass text-center mt-3">
                <a href="{{ route('password.request') }}">Forgot Password ?</a>
            </div>

        </div>

        <div class="col-md-12">
            <div class="login-text text-center">
                <p class="mt-3 text-black">New Here? <a href="{{ route('register') }}" class="">Register </a> as new user !</p>
            </div>
        </div>
    </div>
</form>
@endsection
