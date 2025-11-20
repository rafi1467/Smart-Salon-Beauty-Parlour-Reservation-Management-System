@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <!-- Page Header -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-text mb-4">Our Services</h1>
        <p class="text-gray-600 text-lg">Professional beauty and grooming services for everyone</p>
    </div>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($services as $service)
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow border border-gray-100">
            <!-- Service Header -->
            <div class="bg-primary text-white p-6">
                <h3 class="text-xl font-semibold mb-2">{{ $service->name }}</h3>
                <div class="flex items-center justify-between">
                    <span class="text-2xl font-bold">${{ $service->price }}</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded-full text-sm">
                        {{ $service->duration }} mins
                    </span>
                </div>
            </div>

            <!-- Service Body -->
            <div class="p-6">
                <p class="text-gray-600 mb-4">{{ $service->description }}</p>
                
                <!-- Service Category Badge -->
                <div class="flex items-center justify-between mb-4">
                    <span class="bg-secondary text-text px-3 py-1 rounded-full text-sm capitalize">
                        {{ $service->category }}
                    </span>
                    <span class="text-sm text-gray-500">
                        <i class="fas fa-clock mr-1"></i>{{ $service->duration }} min
                    </span>
                </div>

                <!-- Action Button -->
                <a href="#" 
                   class="w-full bg-accent text-white text-center py-3 px-4 rounded-lg hover:bg-opacity-90 transition-colors block font-semibold">
                    <i class="fas fa-calendar-plus mr-2"></i>Book Now
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Empty State -->
    @if($services->isEmpty())
    <div class="text-center py-12">
        <i class="fas fa-cut text-6xl text-gray-300 mb-4"></i>
        <h3 class="text-xl font-semibold text-text mb-2">No Services Available</h3>
        <p class="text-gray-600">Check back later for our service updates.</p>
    </div>
    @endif
</div>
@endsection