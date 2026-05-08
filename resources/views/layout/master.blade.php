<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-[#353535]">
        @yield('content')
    </body>
</html>