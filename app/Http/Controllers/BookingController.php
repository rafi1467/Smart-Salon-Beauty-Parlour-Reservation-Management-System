<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Show booking history (for now: all bookings)
    public function index()
    {
        $bookings = Booking::orderByDesc('booking_date')
            ->orderByDesc('booking_time')
            ->get();

        return view('bookings.index', compact('bookings'));
    }

    // Show booking confirmation / details
    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }

    // Show invoice for a booking
    public function invoice(Booking $booking)
    {
        return view('bookings.invoice', compact('booking'));
    }

    // Cancel a booking (basic version)
    public function cancel(Booking $booking)
    {
        // here you can later add auth checks

        // Optional rule: don’t cancel past bookings
        if ($booking->booking_date < now()->toDateString()) {
            return back()->with('error', 'You cannot cancel past or completed bookings.');
        }

        $booking->payment_status = 'cancelled';
        $booking->save();

        return back()->with('success', 'Booking cancelled successfully.');
    }
}
