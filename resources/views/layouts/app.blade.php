<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="google-site-verification=x8uVlWXumktgLaF8RtpGA6KrXV5AIbZNOC4aD4hLE4I">


    <title>{{ config('app.name', 'Goyang Pensil') }}</title>

    <link rel="stylesheet" href="{{asset('assets/template/public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">

    <!-- Styles -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
    @yield('content')
    <!-- Styles -->
    <script src="{{asset('assets/template/public/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/template/public/js/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/template/public/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap-notify/bootstrap-notify.js')}}"></script>
    <script src="/js/app.js" type="text/javascript"></script>
    <script>
        // $.notify({
        //     title: "<strong>Welcome:</strong> ",
        //     message: "This plugin has been provided to you by Robert McIntosh aka mouse0270"
        // });
    </script>
</body>
</html>
