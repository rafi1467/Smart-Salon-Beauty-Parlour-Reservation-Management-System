<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/images/WhatsApp_Image_2025-11-17_at_00.14.30-removebg-preview.png"/>
    <title>Smart Salon</title>
    <style>
        .bg-primary { background-color: #5D8AA8; }
        .bg-secondary { background-color: #F0F4F8; }
        .bg-accent { background-color: #E2725B; }
        .bg-highlight { background-color: #88B04B; }
        .text-primary { color: #5D8AA8; }
        .text-text { color: #2C3E50; }
        .text-accent { color: #E2725B; }
    </style>
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