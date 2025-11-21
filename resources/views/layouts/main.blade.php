<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/images/WhatsApp_Image_2025-11-17_at_00.14.30-removebg-preview.png"/>
    <title>Smart Salon</title>
</head>
<body>
    <header>
        @include('partials.header')
        @yield('header')
    </header>
    <main>
        @yield('main')
        
    </main>
    <sidebar>
        @include('partials.sidebar')
    </sidebar>
    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>