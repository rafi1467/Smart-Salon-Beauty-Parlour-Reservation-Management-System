<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Invoice #{{ $booking->booking_number }}</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 40px; background: #f8f8f8; }
        .invoice {
            max-width: 700px;
            margin: 0 auto;
            background: #fff;
            padding: 25px 30px;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        .header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .title { font-size: 24px; font-weight: bold; }
        .salon-name { font-size: 18px; font-weight: bold; }
        table {
            width: 100%; border-collapse: collapse; margin-top: 15px;
        }
        th, td {
            border: 1px solid #ddd; padding: 8px; text-align: left;
        }
        th { background: #f4f4f4; }
        .totals {
            margin-top: 20px;
            text-align: right;
        }
        .totals p { margin: 4px 0; }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #666;
            text-align: center;
        }
        a.button-link {
            padding: 8px 14px;
            text-decoration: none;
            border-radius: 4px;
            border: 1px solid #ccc;
            background: #f5f5f5;
        }
    </style>
</head>
<body>

<div class="invoice">
    <div class="header">
        <div>
            <div class="salon-name">Smart Salon & Beauty Parlour</div>
            <div>Dhaka, Bangladesh</div>
            <div>Phone: +8801XXXXXXXXX</div>
        </div>
        <div style="text-align:right;">
            <div class="title">Invoice</div>
            <div>Invoice #: {{ $booking->booking_number }}</div>
            <div>Date: {{ $booking->booking_date }}</div>
        </div>
    </div>

    <hr>

    <p><strong>Customer Name:</strong> (later connect with user table)</p>
    <p><strong>Booking Time:</strong> {{ $booking->booking_time }}</p>

    <table>
        <thead>
            <tr>
                <th>Service</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $booking->service_name }}</td>
                <td>{{ number_format($booking->service_price, 2) }}</td>
            </tr>
        </tbody>
    </table>

    <div class="totals">
        <p><strong>Subtotal:</strong> {{ number_format($booking->service_price, 2) }}</p>
        {{-- later we can subtract redeemed loyalty points / add taxes etc. --}}
        <p><strong>Total:</strong> {{ number_format($booking->service_price, 2) }} BDT</p>
    </div>

    <p><strong>Loyalty Points Earned:</strong> {{ $booking->loyalty_points_earned ?? 0 }}</p>

    <div style="margin-top: 20px;">
        <a href="{{ route('bookings.index') }}" class="button-link">Back to Booking History</a>
    </div>

    <div class="footer">
        Thank you for choosing Smart Salon & Beauty Parlour.
    </div>
</div>

</body>
</html>
