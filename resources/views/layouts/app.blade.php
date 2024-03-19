<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- recupero il nome del progetto dal file env --}}
    <title> {{ env('APP_NAME') }} - @yield('page-title')</title>

    @vite('resources/js/app.js')

    @yield('css')
</head>

<body>
    <!-- includo il file header -->
    @include('partials.header')

    <main>
        {{-- segnaposto per il main --}}
        @yield('main-content')
    </main>

    <!-- includo il file footer -->
    @include('partials.footer')

    @yield('js')
</body>

</html>
