<!DOCTYPE html>
<html>
<head>
    <title>DevFinder</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
</head>
@include('partials.header') 
<body>
    <div class="container-fluid" id="app">
        @yield('content')
    </div>
</body>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
@include('partials.footer') 
</html>