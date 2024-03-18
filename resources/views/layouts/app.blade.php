<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Laravel Comics - @yield('page-title')</title>

    @vite('resources/js/app.js')

    @yield('css')
</head>

<body>
    <header>
        <div class="container">
            <div class="logo"></div>
            <nav class="links">
                <ul>
                    <li><a href="{{ route('homepage') }}">Homepage</a></li>
                    <li><a href="{{ route('comics') }}">Comics</a></li>
                </ul>
            </nav>
            <div class="searchbar"></div>
        </div>
    </header>
    <main>
        @yield('main-content')
    </main>
    <footer>Footer</footer>

    @yield('js')
</body>
</html>