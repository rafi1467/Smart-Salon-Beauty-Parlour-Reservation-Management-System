<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
    public function index()
    {
        $pendingBookings = Booking::where('status', 'pending')
            ->with(['user', 'service'])
            ->orderByDesc('created_at')
            ->get();

        return view('admin.bookings.index', compact('pendingBookings'));
    }

    public function approve(Booking $booking)
    {
        $booking->update(['status' => 'confirmed']);

        return response()->json(['success' => true, 'message' => 'Booking approved successfully']);
    }

    public function reject(Booking $booking)
    {
        $booking->update(['status' => 'rejected']);

        return response()->json(['success' => true, 'message' => 'Booking rejected successfully']);
    }
}
