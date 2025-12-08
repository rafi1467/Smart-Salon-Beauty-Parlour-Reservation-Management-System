<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment - SmartV</title>
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
<div class="max-w-4xl mx-auto py-12 px-4">
    <div class="bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-3xl font-bold text-text mb-8 text-center">Book Your Appointment</h1>

        <form id="bookingForm" class="space-y-6">
            <!-- User Details -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                    <input type="text" id="name" name="name" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <input type="email" id="email" name="email" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                </div>
                <div>
                    <label for="user_id" class="block text-sm font-medium text-gray-700 mb-2">User ID (optional)</label>
                    <input type="number" id="user_id" name="user_id"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                </div>
            </div>

            <!-- Service Selection -->
            <div>
                <label for="service_id" class="block text-sm font-medium text-gray-700 mb-2">Select Service</label>
                <select id="service_id" name="service_id" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                    <option value="">Choose a service...</option>
                    <option value="1">Hair Cut</option>
                    <option value="2">Hair Styling</option>
                    <option value="3">Facial</option>
                    <option value="4">Manicure</option>
                    <option value="5">Pedicure</option>
                </select>
            </div>

            <!-- Staff Selection -->
            <div>
                <label for="staff_id" class="block text-sm font-medium text-gray-700 mb-2">Select Staff</label>
                <select id="staff_id" name="staff_id"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                    <option value="">Choose a staff member...</option>
                    <option value="1">John Doe</option>
                    <option value="2">Jane Smith</option>
                    <option value="3">Mike Johnson</option>
                </select>
            </div>

            <!-- Date and Time -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="date" class="block text-sm font-medium text-gray-700 mb-2">Preferred Date</label>
                    <input type="date" id="date" name="date" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                </div>
                <div>
                    <label for="time" class="block text-sm font-medium text-gray-700 mb-2">Preferred Time</label>
                    <input type="time" id="time" name="time" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" id="submitBtn"
                        class="bg-primary text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-90 transition duration-300 disabled:opacity-50 disabled:cursor-not-allowed">
                    <i class="fas fa-calendar-check mr-2"></i>Book Appointment
                </button>
            </div>
        </form>

        <!-- Message Display -->
        <div id="message" class="mt-6 text-center hidden">
            <div id="messageContent" class="p-4 rounded-lg"></div>
        </div>
    </div>
</div>

<script>
document.getElementById('bookingForm').addEventListener('submit', async (e) => {
    e.preventDefault();

    const submitBtn = document.getElementById('submitBtn');
    const messageDiv = document.getElementById('message');
    const messageContent = document.getElementById('messageContent');

    submitBtn.disabled = true;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Booking...';

    const payload = {
        user_id: document.getElementById('user_id').value || null,
        service_id: document.getElementById('service_id').value,
        staff_id: document.getElementById('staff_id').value || null,
        date: document.getElementById('date').value,
        time: document.getElementById('time').value,
        user_email: document.getElementById('email').value
    };

    try {
        const response = await fetch('/api/appointment/book', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
            },
            body: JSON.stringify(payload)
        });

        const data = await response.json();

        messageDiv.classList.remove('hidden');

        if (response.ok && data.success) {
            messageContent.className = 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded';
            messageContent.innerHTML = '<i class="fas fa-check-circle mr-2"></i>Appointment booked successfully!';
            document.getElementById('bookingForm').reset();
        } else {
            messageContent.className = 'bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded';
            messageContent.innerHTML = '<i class="fas fa-exclamation-triangle mr-2"></i>Booking failed: ' + (data.message || 'Unknown error');
        }
    } catch (error) {
        messageDiv.classList.remove('hidden');
        messageContent.className = 'bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded';
        messageContent.innerHTML = '<i class="fas fa-exclamation-triangle mr-2"></i>An error occurred. Please try again.';
        console.error(error);
    } finally {
        submitBtn.disabled = false;
        submitBtn.innerHTML = '<i class="fas fa-calendar-check mr-2"></i>Book Appointment';
    }
});
</script>

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
