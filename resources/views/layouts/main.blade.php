<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/images/WhatsApp_Image_2025-11-17_at_00.14.30-removebg-preview.png"/>
    <title>Smart Salon</title>
    <style>
        /* ===== Global Styling ===== */
    body {
        font-family: 'Poppins', sans-serif;
        background: #f7f9fc;
    }

    /* ===== Hero Section ===== */
    .hero-title {
        background: linear-gradient(135deg, #8b5cf6, #ec4899);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-buttons a {
        transition: 0.3s ease;
    }

    .hero-buttons a:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }

    /* ===== Feature Cards ===== */
    .feature-card {
        border-radius: 20px;
        transition: all 0.3s ease-in-out;
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255,255,255,0.4);
    }

    .feature-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.1);
    }

    .feature-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
        font-size: 28px;
        color: white;
        box-shadow: 0 8px 16px rgba(0,0,0,0.15);
    }

    /* ===== CTA Section ===== */
    .cta-box {
        background: linear-gradient(135deg, #6366f1, #ec4899);
        border-radius: 25px;
        padding: 50px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.12);
    }

    .cta-box a {
        transition: 0.3s ease-in-out;
    }

    .cta-box a:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(255,255,255,0.5);
    }

    </style>
</head>
<body>
    <div class="max-w-7xl mx-auto py-12 px-4">

    <!-- Hero Section -->
    <div class="text-center mb-16">
        <h1 class="hero-title text-4xl md:text-6xl font-bold mb-6">
            Welcome to Smart Salon
        </h1>

        <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
            Book your perfect style with our smart reservation system
        </p>

        <div class="hero-buttons">
            <a href="/services"
               class="bg-accent text-white px-8 py-4 rounded-lg text-lg font-semibold inline-block">
                Browse Services
            </a>

            <a href="/booking"
               class="bg-primary text-white px-8 py-4 rounded-lg text-lg font-semibold inline-block ml-4">
                Book Appointment
            </a>
        </div>
    </div>

    <!-- Features -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">

        <div class="feature-card p-6 text-center">
            <div class="feature-icon bg-primary mb-4">
                <i class="fas fa-clock"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Easy Booking</h3>
            <p class="text-gray-600">Book appointments 24/7 from any device</p>
        </div>

        <div class="feature-card p-6 text-center">
            <div class="feature-icon bg-highlight mb-4">
                <i class="fas fa-star"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Expert Stylists</h3>
            <p class="text-gray-600">Professional team with years of experience</p>
        </div>

        <div class="feature-card p-6 text-center">
            <div class="feature-icon bg-accent mb-4">
                <i class="fas fa-calendar"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Flexible Scheduling</h3>
            <p class="text-gray-600">Choose dates and times that work for you</p>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="cta-box text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Ready to Get Started?</h2>
        <p class="text-white opacity-90 mb-6">Join hundreds of satisfied customers</p>

        <a href="/register" class="bg-white text-primary px-8 py-3 rounded-lg font-semibold">
            Create Your Account
        </a>
    </div>
</div>
</body>
</html>