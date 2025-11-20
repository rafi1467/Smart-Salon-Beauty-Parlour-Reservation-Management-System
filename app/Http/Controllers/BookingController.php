<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    // Show booking history for the logged-in user
    public function index()
    {
        $bookings = Booking::where('user_id', Auth::id())
            ->orderByDesc('booking_date')
            ->orderByDesc('booking_time')
            ->get();

        return view('bookings.index', compact('bookings'));
    }

    // Cancel a booking (basic version)
    public function cancel(Booking $booking)
    {
        // Make sure user can only cancel their own booking
        if ($booking->user_id !== Auth::id()) {
            abort(403);
        }

        // Optional rule: don’t cancel past bookings
        if ($booking->booking_date < now()->toDateString()) {
            return back()->with('error', 'You cannot cancel past or completed bookings.');
        }

        $booking->payment_status = 'cancelled';
        $booking->save();

        return back()->with('success', 'Booking cancelled successfully.');
    }
}
