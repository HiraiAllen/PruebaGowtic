<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300&display=swap" rel="stylesheet">

        <style>
            *{
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        @yield('content')

        <script="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
