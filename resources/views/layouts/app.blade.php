<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Default | Equation - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{asset('css/loader.css')}}" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('css/support-chat.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/charts/chartist/chartist.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/default-dashboard/style.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body>
    <div id="app">
        {{--
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Bvote') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}
          <!--  BEGIN NAVBAR  -->
    <header class="header navbar fixed-top navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i class="flaticon-menu-line-2"></i></a>
        <ul class="navbar-nav flex-row">
            <li class="nav-item dropdown language-dropdown ml-1  ml-lg-0">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="flagDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="assets/img/ca.svg" alt=""> <span class="d-lg-inline-block d-none"></span>
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="flagDropdown">
                    <a class="dropdown-item" href="javascript:void(0);"><img src="assets/img/de.svg" class="flag-width" alt=""> &#xA0;German</a>
                    <a class="dropdown-item" href="javascript:void(0);"><img src="assets/img/jp.svg" class="flag-width" alt=""> &#xA0;Japanese</a>
                    <a class="dropdown-item" href="javascript:void(0);"><img src="assets/img/fr.svg" class="flag-width" alt=""> &#xA0;French</a>
                    <a class="dropdown-item" href="javascript:void(0);"><img src="assets/img/ru.svg" class="flag-width" alt=""> &#xA0;Russian</a>
                    <a class="dropdown-item" href="javascript:void(0);"><img src="assets/img/ca.svg" class="flag-width" alt=""> &#xA0;English</a>
                </div>
            </li>
        </ul>


        <ul class="navbar-nav flex-row mr-lg-auto ml-lg-0  ml-auto">
            <li class="nav-item dropdown message-dropdown ml-lg-4">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-mail-10"></span><span class="badge badge-primary">13</span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="messageDropdown">
                    <a class="dropdown-item title" href="javascript:void(0);">
                        <i class="flaticon-chat-line mr-3"></i><span>You have 13 new messages</span>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <div class="media">
                            <div class="usr-img online mr-3">
                                <img class="usr-img rounded-circle" src="assets/img/profile-9.jpg" alt="Generic placeholder image">
                            </div>
                            <div class="media-body">
                                <div class="mt-0">
                                    <p class="text mb-0">Browse latest projects...</p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <p class="meta-user-name mb-0">Kara Young</p>
                                    <p class="meta-time mb-0  align-self-center">1 min ago</p>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <div class="usr-img mr-3">
                                <img class="usr-img rounded-circle" src="assets/img/profile-24.jpg" alt="Generic placeholder image">
                            </div>
                            <div class="media-body">
                                <div class="mt-0">
                                    <p class="text mb-0">Design, Development and...</p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <p class="meta-user-name mb-0">Amy Diaz</p>
                                    <p class="meta-time mb-0  align-self-center">5 mins ago</p>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <div class="usr-img online mr-3">
                                <img class="usr-img rounded-circle" src="assets/img/profile-3.jpg" alt="Generic placeholder image">
                            </div>
                            <div class="media-body">
                                <div class="mt-0">
                                    <p class="text mb-0">We can ensure...</p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <p class="meta-user-name mb-0">Shaun Park</p>
                                    <p class="meta-time mb-0  align-self-center">1 day ago</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a class="footer dropdown-item" href="javascript:void(0);">
                        <div class="btn btn-info mb-3 mr-2 btn-rounded"><i class="flaticon-arrow-right mr-3"></i> View more</div>
                    </a>
                </div>
            </li>

            <li class="nav-item dropdown notification-dropdown ml-3">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-bell-4"></span><span class="badge badge-success">15</span>
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                    <a class="dropdown-item title" href="javascript:void(0);">
                        <i class="flaticon-bell-13 mr-3"></i> <span>You have 15 new notifications</span>
                    </a>

                    <a class="dropdown-item text-center  p-1" href="javascript:void(0);">

                        <div class="notification-list ">

                            <div class="notification-item position-relative  mb-3">
                                <div class="c-dropdown text-right">
                                    <span id="c-dropdonbtn" class="c-dropbtn mr-2"><i class="flaticon-dots"></i></span>
                                    <div class="c-dropdown-content">
                                        <div class="c-dropdown-item">View</div>
                                        <div class="c-dropdown-item">Delete</div>
                                    </div>
                                </div>

                                <h6 class="mb-1">5 new members joined today</h6>
                                <p><span class="meta-time">1 minute ago</span> . <span class="meta-member-notification">4 members</span></p>
                                <ul class="list-inline badge-collapsed-img mt-3">
                                    <li class="list-inline-item chat-online-usr">
                                        <img src="assets/img/profile-2.jpg" alt="admin-profile" class="ml-0">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img src="assets/img/profile-3.jpg" alt="admin-profile">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img src="assets/img/profile-4.jpg" alt="admin-profile">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img src="assets/img/profile-5.jpg" alt="admin-profile">
                                    </li>
                                </ul>

                            </div>

                            <div class="notification-item position-relative  mb-3">

                                <div class="c-dropdown text-right">
                                    <span id="c-dropdonbtn2" class="c-dropbtn mr-2"><i class="flaticon-dots"></i></span>
                                    <div class="c-dropdown-content">
                                        <div class="c-dropdown-item">View</div>
                                        <div class="c-dropdown-item">Delete</div>
                                    </div>
                                </div>

                                <h6 class="mb-1">Very long description...</h6>
                                <p><span class="meta-time">5 minutes ago</span> . <span class="meta-member-notification">5 members</span></p>
                                <ul class="list-inline badge-collapsed-img mt-3">
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/profile-6.jpg" class="ml-0">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/profile-7.jpg">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/profile-8.jpg">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/profile-10.jpg">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/profile-1.jpg">
                                    </li>
                                </ul>

                            </div>

                            <div class="notification-item position-relative  mb-3">
                                <div class="c-dropdown text-right">
                                    <span class="c-dropbtn mr-2"><i class="flaticon-dots"></i></span>
                                    <div class="c-dropdown-content">
                                        <div class="c-dropdown-item">View</div>
                                        <div class="c-dropdown-item">Delete</div>
                                    </div>
                                </div>

                                <h6 class="mb-1">New item are in queue</h6>
                                <p><span class="meta-time">25 minutes ago</span> . <span class="meta-member-notification">3 members</span></p>
                                <ul class="list-inline badge-collapsed-img mt-3">
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/profile-11.jpg" class="ml-0">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/profile-16.jpg">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/profile-14.jpg">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                    <a class="footer dropdown-item text-center p-2">
                        <span class="mr-1">View All</span>
                        <div class="btn btn-gradient-warning rounded-circle"><i class="flaticon-arrow-right flaticon-circle-p"></i></div>
                    </a>
                </div>
            </li>
        </ul>


        <ul class="navbar-nav flex-row ml-lg-auto">

            <li class="nav-item  d-lg-block d-none">
                <form class="form-inline" role="search">
                    <input type="text" class="form-control search-form-control" placeholder="Search...">
                </form>
            </li>

            <li class="nav-item dropdown app-dropdown  ml-lg-4 mr-lg-2 order-lg-0 order-2">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="appDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-bulb"></span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="appDropdown">
                    <a class="dropdown-item" href="ecommerce_dashboard.html">
                        <i class="flaticon-commerce"></i><span>eCommerce</span>
                    </a>
                    <a class="dropdown-item" href="form_bootstrap_basic.html">
                        <i class="flaticon-edit-3"></i><span>Forms</span>
                    </a>
                    <a class="dropdown-item" href="table_basic.html">
                        <i class="flaticon-table"></i><span>Tables</span>
                    </a>
                    <a class="dropdown-item" href="ui_buttons.html">
                        <i class="flaticon-switch"></i><span>Buttons</span>
                    </a>
                    <a class="dropdown-item" href="ui_flaticon_icon.html">
                        <i class="flaticon-edit"></i><span>Font Icons</span>
                    </a>
                    <a class="dropdown-item" href="modules_widgets.html">
                        <i class="flaticon-computer-5"></i><span>Modules</span>
                    </a>
                    <a class="dropdown-item" href="map_google_basic.html">
                        <i class="flaticon-location"></i><span>Maps</span>
                    </a>
                    <a class="dropdown-item" href="apps_drag_n_drop_calendar.html">
                        <i class="flaticon-calendar-1"></i><span>Calendar</span>
                    </a>
                    <a class="dropdown-item" href="am_column_and_barchart.html">
                        <i class="flaticon-chart-3"></i><span>Charts</span>
                    </a>
                </div>
            </li>


            <li class="nav-item dropdown user-profile-dropdown ml-lg-0 mr-lg-2 ml-3 order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-user-12"></span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="userProfileDropdown">
                    <a class="dropdown-item" href="user_profile.html">
                        <i class="mr-1 flaticon-user-6"></i> <span>My Profile</span>
                    </a>
                    <a class="dropdown-item" href="apps_scheduler.html">
                        <i class="mr-1 flaticon-calendar-bold"></i> <span>My Schedule</span>
                    </a>
                    <a class="dropdown-item" href="apps_mailbox.html">
                        <i class="mr-1 flaticon-email-fill-1"></i> <span>My Inbox</span>
                    </a>
                    <a class="dropdown-item" href="user_lockscreen_1.html">
                        <i class="mr-1 flaticon-lock-2"></i> <span>Lock Screen</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="user_login_1.html">
                        <i class="mr-1 flaticon-power-button"></i> <span>Log Out</span>
                    </a>
                </div>
            </li>

            <li class="nav-item dropdown cs-toggle order-lg-0 order-3">
                <a href="#" class="nav-link toggle-control-sidebar suffle">
                    <span class="flaticon-menu-dot-fill d-lg-inline-block d-none"></span>
                    <span class="flaticon-dots d-lg-none"></span>
                </a>
            </li>
        </ul>
    </header>
    <!--  END NAVBAR  -->


            <div class="main-container" id="container">

                <div class="overlay"></div>
                <div class="cs-overlay"></div>
                @include('inc.sidebar')
                @yield('content')
            </div>
        
    </div>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/loader.js')}}"></script>
    <script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{asset('plugins/charts/chartist/chartist.js')}}"></script>
    <script src="{{asset('plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{asset('plugins/maps/vector/jvector/worldmap_script/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('plugins/calendar/pignose/moment.latest.min.js')}}"></script>
    <script src="{{asset('plugins/calendar/pignose/pignose.calendar.js')}}"></script>
    <script src="{{asset('plugins/progressbar/progressbar.min.js')}}"></script>
    <script src="{{asset('js/default-dashboard/default-custom.js')}}"></script>
    <script src="{{asset('js/support-chat.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>
</html>
