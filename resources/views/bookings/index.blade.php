<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My Booking History</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        h1 { margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
        .status-upcoming { color: green; font-weight: bold; }
        .status-cancelled { color: red; font-weight: bold; }
        .status-completed { color: blue; font-weight: bold; }
        .message { padding: 10px; margin-bottom: 15px; border-radius: 4px; }
        .message-success { background-color: #d4edda; }
        .message-error { background-color: #f8d7da; }
        button { padding: 6px 10px; cursor: pointer; }
    </style>
</head>
<body>

    <h1>My Booking History</h1>

    {{-- Flash messages --}}
    @if(session('success'))
        <div class="message message-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="message message-error">{{ session('error') }}</div>
    @endif

    @if($bookings->isEmpty())
        <p>You have no bookings yet.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Booking #</th>
                    <th>Service</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Payment Status</th>
                    <th>Loyalty Points Earned</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->booking_number }}</td>
                        <td>{{ $booking->service_name }}</td>
                        <td>{{ $booking->service_price }}</td>
                        <td>{{ $booking->booking_date }}</td>
                        <td>{{ $booking->booking_time }}</td>
                        <td>
                            <span class="status-{{ $booking->payment_status }}">
                                {{ ucfirst($booking->payment_status) }}
                            </span>
                        </td>
                        <td>{{ $booking->loyalty_points_earned ?? 0 }}</td>
                        <td>
                            @if($booking->payment_status !== 'cancelled')
                                <form action="{{ route('bookings.cancel', $booking) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" onclick="return confirm('Cancel this booking?');">
                                        Cancel
                                    </button>
                                </form>
                            @else
                                —
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</body>
</html>
