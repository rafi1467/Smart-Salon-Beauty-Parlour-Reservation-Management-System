<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Salon</title>
</head>
<body>
    <header>
        @include('partials.header')
        @yield('header')
    </header>
    <main>
        @yield('main')
        @yield('chatBot')
    </main>
    <sidebar>
        @include('partials.sidebar')
    </sidebar>
    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>