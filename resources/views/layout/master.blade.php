<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/chapter-opt.js'])
    </head>

    <body class="bg-black">
        @yield('content')
    </body>
</html>