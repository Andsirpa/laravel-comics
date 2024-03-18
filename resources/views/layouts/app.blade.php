<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ env('APP-NAME') }} - @yield('page-title')</title>

    @vite('resources/js/app.js')

    @yield('css')
</head>

<body>
    <header>Header</header>
    <main>
        @yield('main-content')
    </main>
    <footer>Footer</footer>

    @yield('js')
</body>
</html>