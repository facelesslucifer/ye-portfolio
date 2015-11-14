<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

    <title> @yield('title') </title>

    <!-- CSS  -->
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">

    <link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href="{!! asset('/css/style.min.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<div id="main-body">

@include('shared.navbar')

@yield('content')

@include('shared.footer')

<!--  Scripts-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>
<script src="{!! asset('/js/init.min.js') !!}"></script>

<script src='https://www.google.com/recaptcha/api.js'></script>


</body>
</html>