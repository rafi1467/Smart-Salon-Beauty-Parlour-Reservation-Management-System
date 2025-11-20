<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Salon</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
<body class="bg-secondary">
    <!-- Simple Navigation -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="/" class="text-xl font-bold text-primary">Smart Salon</a>
                <div class="space-x-4">
                    <a href="/login" class="text-text hover:text-accent">Login</a>
                    <a href="/register" class="bg-primary text-white px-4 py-2 rounded hover:bg-opacity-90">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
</body>
</html>