@extends('layouts.main')

@section('main')
<div class="max-w-7xl mx-auto py-12 px-4">
    <!-- Hero Section -->
    <div class="text-center mb-16">
        <h1 class="text-4xl md:text-6xl font-bold text-text mb-6">Welcome to SmartV</h1>
        <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
            Book your perfect style with our smart reservation system
        </p>
        <a href="/services"
           class="bg-accent text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-90 inline-block">
            Browse Services
        </a>
        <a href="/booking"
           class="bg-primary text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-90 inline-block ml-4">
            Book Appointment
        </a>
        <a href="/bookings"
           class="bg-gray-700 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-90 inline-block ml-4">
            My Bookings
        </a>

    </div>

    <!-- Features -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
        <div class="bg-white p-6 rounded-lg shadow text-center">
            <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-clock text-xl"></i>
            </div>
            <h3 class="text-xl font-semibold text-text mb-2">Easy Booking</h3>
            <p class="text-gray-600">Book appointments 24/7 from any device</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow text-center">
            <div class="w-12 h-12 bg-highlight text-white rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-star text-xl"></i>
            </div>
            <h3 class="text-xl font-semibold text-text mb-2">Expert Stylists</h3>
            <p class="text-gray-600">Professional team with years of experience</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow text-center">
            <div class="w-12 h-12 bg-accent text-white rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-calendar text-xl"></i>
            </div>
            <h3 class="text-xl font-semibold text-text mb-2">Flexible Scheduling</h3>
            <p class="text-gray-600">Choose dates and times that work for you</p>
        </div>
    </div>

    <!-- Simple Call to Action -->
    <div class="bg-white rounded-lg shadow p-8 text-center">
        <h2 class="text-3xl font-bold text-text mb-4">Ready to Get Started?</h2>
        <p class="text-gray-600 mb-6">Join hundreds of satisfied customers</p>
        <a href="/register" class="bg-primary text-white px-8 py-3 rounded-lg hover:bg-opacity-90">
            Create Your Account
        </a>
    </div>
</div>
@endsection