<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand</title>
    <link rel="stylesheet" href="{{ asset('css/pico.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themes/default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/c952ac5cde.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        @include('includes.navbar')    
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="container">
        @include('includes.footer')
    </footer>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/minimal-theme-switcher.js') }}"></script>
</body>
</html>