<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>BVOTE || Dashboard</title>
    {{-- <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}"/> --}}
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
    @notifyCss
</head>
<body>
    <div id="app">
        <div class="main-container" id="container">

            <div class="overlay"></div>
            <div class="cs-overlay"></div>
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
    @notifyJs
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>
</html>
