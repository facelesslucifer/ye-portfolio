<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

    <title> @yield('title') </title>

    <!-- CSS  -->
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="{!! asset('/css/materialize.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="{!! asset('/font-awesome/css/font-awesome.min.css') !!}">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <link href="{!! asset('/css/style.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<div id="main-body">

@include('shared.navbar')

@yield('content')

@include('shared.footer')

<!--  Scripts-->
{{-- <script src="{!! asset('/js/jquery-2.1.1.min.js') !!}"></script>
<script src="{!! asset('/js/materialize.js') !!}"></script>

<script src="{!! asset('/js/init.js') !!}"></script> --}}
<script type="text/javascript" src="{!! asset('/js/output.min.js') !!}"></script>

</body>
</html>