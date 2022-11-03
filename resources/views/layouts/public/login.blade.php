<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/propiedades/login/sweet-alert.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/propiedades/login/material-design-iconic-font.min.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/propiedades/login/normalize.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/propiedades/login/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/propiedades/login/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/propiedades/login/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/propiedades/login/login.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/propiedades/login/timeline.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script type="text/javascript" src="{{ asset('assets/propiedades/login/sweet-alert.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/propiedades/login/modernizr.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('assets/propiedades/login/bootstrap.min.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('assets/propiedades/login/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/propiedades/login/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body class="full-cover-background" style="background-image:url({{ asset('assets/img/logos.jpg') }});">
    @yield('content')


</body>
</html>
