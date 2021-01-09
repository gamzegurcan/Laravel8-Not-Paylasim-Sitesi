<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets')}}/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="{{asset('assets')}}/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/slick.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="{{asset('assets')}}/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>



    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <script src="{{asset('assets')}}/js/jquery.min.js"></script>

    <script src="{{asset('assets')}}/js/bootstrap.js"></script>

    <script type="text/javascript" src="{{asset('assets')}}/js/slick.js"></script>

    <script type="text/javascript" src="{{asset('assets')}}/js/waypoints.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.counterup.js"></script>

    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.mixitup.js"></script>

    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.fancybox.pack.js"></script>


    <script src="{{asset('assets')}}/js/custom.js"></script>

    @yield('css')
    @yield('headerjs')

</head>
<body>
@include('home._header')
@include('home._navbar')

@section('content')
@show
@include('home._footer')
@yield('footerjs')
</body>
</html>
