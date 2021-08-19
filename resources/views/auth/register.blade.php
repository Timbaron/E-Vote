@extends('layouts.auth')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<form class="form-login" action="{{route('register')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12 text-center mb-4">
            <img alt="logo" src="{{asset('imgf/logo-3.png')}}" class="theme-logo">
        </div>
        <div class="col-md-12">

            <div class="social text-center">
                <h5 class="mb-4">Sign up with</h5>
                <a href="/login/redirect" type="button" class="btn btn-outline-danger rounded-circle mb-3 mr-2"><i class="flaticon-google-plus-bold flaticon-circle-p"></i></a>
            </div>

            <div class="division mt-4 mb-5">
                <div class="line line-left"></div>
                    <span>or</span>
                <div class="line line-right"></div>
            </div>
            <div>
                @error('email')
                    <span style="color: red"><i><b>Email is already in use</b></i></span>
                @enderror
            </div>
            <label for="inputEmail" class="">First Name</label>
            <input type="name" id="inputEmail" name="first_name" class="form-control mb-4" placeholder="First Name" required >
            @error('first_name')
                <span style="color: red"><i><b>{{$message}}</b></i></span>
            @enderror <br>
            <label for="inputEmail" class="">Last Name</label>
            <input type="name" id="inputEmail" name="last_name" class="form-control mb-4" placeholder="Last Name" required >
            @error('password')
                <span style="color: red"><i><b>{{$message}}</b></i></span>
            @enderror <br>
            <label for="inputEmail" class="">User Name</label>
            <input type="username" id="inputEmail" name="username" class="form-control mb-4" placeholder="User Name" required >
            @error('password')
                <span style="color: red"><i><b>Password do not match</b></i></span>
            @enderror <br>
            <label for="inputEmail" class="">Email Address</label>
            <input type="email" id="inputEmail" name="email" class="form-control mb-4" placeholder="Email Address" required >
            @error('password')
                <span style="color: red"><i><b>Password do not match</b></i></span>
            @enderror <br>
            <label for="inputPassword" class="">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control mb-5" placeholder="Password" required>
            <label for="inputPassword" class="">Confirm Password</label>
            <input type="password" id="inputPassword" name="password_confirmation" class="form-control mb-5" placeholder="Password" required>
            <!-- <label for="account-type">Register as a?</label>
            <div class="checkbox d-flex justify-content-center mb-3">
                <div class="row justify-content-between">
                    <div class="col">
                        <input type="radio" class="custom-control-input" id="customCheck1" value="voter" name="account_type">
                        <label class="custom-control-label" for="customCheck1">Voter</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="custom-control-input" id="customCheck2" value="admin" name="account_type">
                        <label class="custom-control-label" for="customCheck2">Admin</label>
                    </div>
                </div>
            </div> -->
            <button type="submit" class="btn btn-gradient-dark btn-rounded btn-block">Sign up</button>
        </div>

        <div class="col-md-12">
            <div class="login-text text-center">
                <p class="mt-3 text-black">Have an Account? <a href="{{ route('login') }}" class="">Login </a></p>
            </div>
        </div>
    </div>
</form>
@endsection

