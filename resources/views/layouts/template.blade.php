<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset("favicon.ico") }}" type="image/ico" />
    <title>@yield('title')</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/w3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <style type="text/css">
        @font-face {
            font-family: eczar;
            src: url("fonts/Eczar-Bold.ttf");
        }
        #navbar-logo{
            font-family: eczar;
            font-size: 30px;
        }
        strong {
            font-family: eczar;
            font-size: 20px;
            color: white !important;
        }
    </style>

</head>
<body onload="startTime()">
    @section('navbar')
        @show
    @section('body')
        @show
</body>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/date_time.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/mui.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
</html>
