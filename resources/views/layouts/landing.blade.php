<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>B-VOTE</title>
    <link href="{{asset('css/loader.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('plugins/sliders/owlCarousel/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/sliders/owlCarousel/css/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/flaticon/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/landing-page/style.css')}}">


</head>
<body>
    <div id="eq-loader">
        <div class="eq-loader-div">
            <div class="eq-loading dual-loader mx-auto mb-5"></div>
        </div>
    </div>
    @yield('content')
    <script src="{{asset('js/libs/jquery-3.1.1.min.js')}}"></script>
	<script src="{{asset('js/loader.js')}}"></script>
	<script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
	<script src="{{asset('plugins/sliders/owlCarousel/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/pages/landing-page/script.js')}}"></script>
</body>
</html>
