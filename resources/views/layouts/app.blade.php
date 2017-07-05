<!DOCTYPE html>
<html>
<head>
    <title>DevFinder</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>
@include('partials.header') 
<body>
        @yield('content')
</body>
@include('partials.footer') 
</html>