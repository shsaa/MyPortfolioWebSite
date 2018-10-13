<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('head')
</head>
<body>
@yield('content')
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
@yield('script')
</html>
