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
