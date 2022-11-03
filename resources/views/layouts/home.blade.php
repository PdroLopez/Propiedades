<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Taxi Ticket</title>
</head>
<body>
    @yield('content')
    
</body>

<footer>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</footer>
</html>