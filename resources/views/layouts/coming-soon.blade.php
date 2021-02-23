<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Coming Soon 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="{{asset('coming_soon/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('coming_soon/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('coming_soon/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('coming_soon/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('coming_soon/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('coming_soon/css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('coming_soon/css/main.css')}}">
    <!--===============================================================================================-->
    </head>
<body>

    @yield('content')


<!--===============================================================================================-->
	<script src="{{asset('coming_soon/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('coming_soon/vendor/bootstrap/js/popper.js')}}"></script>
        <script src="{{asset('coming_soon/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('coming_soon/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('coming_soon/vendor/countdowntime/moment.min.js')}}"></script>
        <script src="{{asset('coming_soon/vendor/countdowntime/moment-timezone.min.js')}}"></script>
        <script src="{{asset('coming_soon/vendor/countdowntime/moment-timezone-with-data.min.js')}}"></script>
        <script src="{{asset('coming_soon/vendor/countdowntime/countdowntime.js')}}"></script>
        <script>
            $('.cd100').countdown100({
                /*Set Endtime here*/
                /*Endtime must be > current time*/
                endtimeYear: 0,
                endtimeMonth: 0,
                endtimeDate: 10,
                endtimeHours: 18,
                endtimeMinutes: 0,
                endtimeSeconds: 0,
                timeZone: ""
                // ex:  timeZone: "America/New_York"
                //go to " http://momentjs.com/timezone/ " to get timezone
            });
        </script>
    <!--===============================================================================================-->
        <script src="{{asset('coming_soon/vendor/tilt/tilt.jquery.min.js')}}"></script>
        <script >
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
    <!--===============================================================================================-->
        <script src="{{asset('coming_soon/js/main.js')}}"></script>
</body>
</html>
