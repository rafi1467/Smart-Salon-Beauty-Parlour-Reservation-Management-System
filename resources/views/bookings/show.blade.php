<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .card {
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        h1 { margin-top: 0; }
        .label { font-weight: bold; }
        .actions { margin-top: 20px; }
        a.button-link {
            padding: 8px 14px;
            text-decoration: none;
            border-radius: 4px;
            border: 1px solid #ccc;
            background: #f5f5f5;
            margin-right: 8px;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Booking Confirmation</h1>

    <p><span class="label">Booking Number:</span> {{ $booking->booking_number }}</p>
    <p><span class="label">Service:</span> {{ $booking->service_name }}</p>
    <p><span class="label">Price:</span> {{ $booking->service_price }}</p>
    <p><span class="label">Date:</span> {{ $booking->booking_date }}</p>
    <p><span class="label">Time:</span> {{ $booking->booking_time }}</p>
    <p><span class="label">Payment Status:</span> {{ ucfirst($booking->payment_status) }}</p>
    <p><span class="label">Loyalty Points Earned:</span> {{ $booking->loyalty_points_earned ?? 0 }}</p>

    <div class="actions">
        <a href="{{ route('bookings.invoice', $booking) }}" class="button-link">View Invoice</a>
        <a href="{{ route('bookings.index') }}" class="button-link">Back to History</a>
    </div>
</div>

</body>
</html>
