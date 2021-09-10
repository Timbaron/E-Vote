@extends('layouts.landing')

@section('content')
<div id="navHeadWrapper" class="navHeaderWrapper header-image">
    <!-- NavBar -->
    <!-- Brand -->
    <div class="">
        <nav class="navbar navbar-expand-lg bg-faded header-nav">
            <div class="container">

                <div class="col-xl-4 col-lg-3 col-6 mx-auto ">
                    <a class="navbar-brand" href="/"><h4>B-Vote</h4></a>
                </div>

                <div class="col-6 text-right d-lg-none d-block">
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon flaticon-left-menu"></span>
                    </button>
                </div>

                <div class="col-xl-8 col-lg-9">
                    <!-- Links -->
                    <div class="collapse navbar-collapse justify-content-end" id="nav-content">
                        <ul class="navbar-nav text-center mt-lg-0 mt-5">
                            <li class="nav-item active">
                                <a class="nav-link js-scroll-trigger" href="/">Home</a>
                              </li>
                              {{-- <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#whyusWrapper">About us</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#servicesWrapper">Services</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#latestNewsWrapper">News</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#footerWrapper">Contact Us</a>
                              </li> --}}
                        </ul>
                            @auth
                                <form class="form-inline justify-content-lg-start justify-content-center mt-lg-0 mt-5" action="/dashboard">
                                        <button class="btn ml-xl-4" type="submit">Dashboard</button>
                                </form>
                            @else
                            <form class="form-inline justify-content-lg-start justify-content-center mt-lg-0 mt-5" action="/login">
                                <button class="btn ml-xl-4" type="submit">Login</button>
                            </form>
                            @endauth
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- /NavBar -->

    <!-- Header -->
    <div id="headerWrapper" class="container">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-lg-0 mt-5">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-2 align-self-center  mb-lg-0 mb-5">
                    <div class="site-header-inner  mt-lg-0 mt-5">
                        <h2 class="">B-VOTE</h2>
                        <p>Faster and easier way to create and cast your votes online.</p>
                        @auth
                        <a href="/dashboard" class="btn btn-primary mt-5">Dashboard</a>
                        @else
                        <a href="/login" class="btn btn-primary mt-5">Create a new account</a>
                        @endauth
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-1 text-center">
                    <div class="banner-image">
                        <img alt="cover-image" src="{{asset('img/index.png')}}" class="img-fluid cover" style="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Header -->
</div>
@endsection
