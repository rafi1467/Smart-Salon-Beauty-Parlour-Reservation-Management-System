<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartV - Book Your Perfect Style</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .bg-primary { background-color: #5D8AA8; }
        .bg-secondary { background-color: #F0F4F8; }
        .bg-accent { background-color: #E2725B; }
        .bg-highlight { background-color: #88B04B; }
        .text-primary { color: #5D8AA8; }
        .text-text { color: #2C3E50; }
        .text-accent { color: #E2725B; }
        .border-primary { border-color: #5D8AA8; }
        .border-accent { border-color: #E2725B; }
        
        .hero-bg {
            background: linear-gradient(rgba(93, 138, 168, 0.9), rgba(93, 138, 168, 0.7)), 
                        url('https://images.unsplash.com/photo-1560066984-138dadb4c035?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80');
            background-size: cover;
            background-position: center;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }
        
        .testimonial-card {
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-secondary">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="/" class="text-2xl font-bold text-primary flex items-center">
                    <i class="fas fa-scissors mr-2"></i>SmartV
                </a>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="/" class="text-text font-medium hover:text-accent transition-colors">Home</a>
                    <a href="/services" class="text-text font-medium hover:text-accent transition-colors">Services</a>
                    <a href="/stylists" class="text-text font-medium hover:text-accent transition-colors">Our Stylists</a>
                    <a href="/about" class="text-text font-medium hover:text-accent transition-colors">About Us</a>
                    <a href="/contact" class="text-text font-medium hover:text-accent transition-colors">Contact</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/login" class="text-text hover:text-accent transition-colors">Login</a>
                    <a href="/register" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-opacity-90 transition-colors font-medium">Register</a>
                    <button class="md:hidden text-text">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Section -->
    <main>
        @yield('content')
    </main>

    <!-- Hero Section -->
    <section class="hero-bg text-white py-20 md:py-32">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Your Style, Perfected</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                Discover the future of beauty with our AI-powered salon experience. Book appointments, get personalized recommendations, and look your best.
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="/appointment/book" class="bg-accent text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-90 transition-colors inline-block">
                    <i class="fas fa-calendar-alt mr-2"></i>Book Appointment
                </a>
                <a href="/stylists" class="bg-white text-primary px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-90 transition-colors inline-block">
                    <i class="fas fa-users mr-2"></i>Meet Our Stylists
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-text mb-4">Why Choose SmartV?</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">We combine cutting-edge technology with expert craftsmanship for an unparalleled beauty experience.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 rounded-lg bg-secondary">
                    <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-robot text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-text mb-2">AI-Powered Recommendations</h3>
                    <p class="text-gray-600">Get personalized style suggestions based on your preferences and features.</p>
                </div>

                <div class="text-center p-6 rounded-lg bg-secondary">
                    <div class="w-16 h-16 bg-highlight text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-mobile-alt text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-text mb-2">Easy Online Booking</h3>
                    <p class="text-gray-600">Book appointments 24/7 from any device with our mobile-friendly platform.</p>
                </div>

                <div class="text-center p-6 rounded-lg bg-secondary">
                    <div class="w-16 h-16 bg-accent text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-star text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-text mb-2">Expert Stylists</h3>
                    <p class="text-gray-600">Our professional team has years of experience and ongoing training.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Services Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-text mb-4">Popular Services</h2>
                <p class="text-gray-600 text-lg">From classic cuts to modern treatments, we offer a full range of beauty services.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-xl shadow-md overflow-hidden service-card">
                    <div class="h-40 bg-primary flex items-center justify-center">
                        <i class="fas fa-cut text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-text mb-2">Haircut & Styling</h3>
                        <p class="text-gray-600 mb-4">Professional haircut with modern styling techniques.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-primary font-bold text-lg">$35+</span>
                            <a href="/booking" class="text-accent font-medium">Book Now</a>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-md overflow-hidden service-card">
                    <div class="h-40 bg-highlight flex items-center justify-center">
                        <i class="fas fa-spa text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-text mb-2">Facial Treatments</h3>
                        <p class="text-gray-600 mb-4">Rejuvenating facials for glowing, healthy skin.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-primary font-bold text-lg">$60+</span>
                            <a href="/services" class="text-accent font-medium">Book Now</a>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-md overflow-hidden service-card">
                    <div class="h-40 bg-accent flex items-center justify-center">
                        <i class="fas fa-palette text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-text mb-2">Hair Coloring</h3>
                        <p class="text-gray-600 mb-4">Expert coloring with premium products.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-primary font-bold text-lg">$80+</span>
                            <a href="/services" class="text-accent font-medium">Book Now</a>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-md overflow-hidden service-card">
                    <div class="h-40 bg-primary flex items-center justify-center">
                        <i class="fas fa-hand-sparkles text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-text mb-2">Manicure & Pedicure</h3>
                        <p class="text-gray-600 mb-4">Luxurious nail care with lasting results.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-primary font-bold text-lg">$45+</span>
                            <a href="/services" class="text-accent font-medium">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-10">
                <a href="/services" class="bg-primary text-white px-8 py-3 rounded-lg hover:bg-opacity-90 transition-colors inline-block font-medium">
                    View All Services <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-text mb-4">What Our Clients Say</h2>
                <p class="text-gray-600 text-lg">Don't just take our word for it - hear from our satisfied customers.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="testimonial-card bg-secondary p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold mr-4">S</div>
                        <div>
                            <h4 class="font-semibold text-text">Sarah Johnson</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"The AI recommendations were spot on! I got a haircut that perfectly suits my face shape. Best salon experience ever!"</p>
                </div>
                
                <div class="testimonial-card bg-secondary p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center text-white font-bold mr-4">M</div>
                        <div>
                            <h4 class="font-semibold text-text">Michael Chen</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Booking through their app was so convenient. The stylist was amazing and the whole experience was seamless."</p>
                </div>
                
                <div class="testimonial-card bg-secondary p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-highlight rounded-full flex items-center justify-center text-white font-bold mr-4">J</div>
                        <div>
                            <h4 class="font-semibold text-text">Jessica Williams</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"I've been to many salons, but SmartV's personalized approach and modern technology make it stand out. Highly recommend!"</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-primary text-white">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Transform Your Look?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Join thousands of satisfied customers who have discovered their perfect style with SmartV.</p>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="/register" class="bg-accent text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-90 transition-colors inline-block">
                    Create Your Account
                </a>
                <a href="/services" class="bg-white text-primary px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-90 transition-colors inline-block">
                    Browse Services
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-text text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 flex items-center">
                        <i class="fas fa-scissors mr-2"></i>SmartV
                    </h3>
                    <p class="text-gray-300">Where technology meets beauty for your perfect style experience.</p>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-300 hover:text-white transition-colors">Home</a></li>
                        <li><a href="/services" class="text-gray-300 hover:text-white transition-colors">Services</a></li>
                        <li><a href="/stylists" class="text-gray-300 hover:text-white transition-colors">Our Stylists</a></li>
                        <li><a href="/about" class="text-gray-300 hover:text-white transition-colors">About Us</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Customer Care</h4>
                    <ul class="space-y-2">
                        <li><a href="/contact" class="text-gray-300 hover:text-white transition-colors">Contact Us</a></li>
                        <li><a href="/faq" class="text-gray-300 hover:text-white transition-colors">FAQ</a></li>
                        <li><a href="/privacy" class="text-gray-300 hover:text-white transition-colors">Privacy Policy</a></li>
                        <li><a href="/terms" class="text-gray-300 hover:text-white transition-colors">Terms of Service</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Connect With Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-tiktok text-xl"></i>
                        </a>
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-300">
                            <i class="fas fa-phone mr-2"></i> +8801234567890
                        </p>
                        <p class="text-gray-300 mt-2">
                            <i class="fas fa-envelope mr-2"></i> info@smartv.com
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 SmartV. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>