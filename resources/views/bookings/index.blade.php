<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My Booking History</title>

    {{-- Simple Google Font (optional) --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', Arial, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #f3e7ff, #e3f2ff);
            padding: 40px 20px;
            color: #333;
        }

        .page-wrapper {
            max-width: 1100px;
            margin: 0 auto;
        }

        .card {
            background: #ffffff;
            border-radius: 18px;
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.1);
            padding: 24px 28px 30px;
        }

        .header-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 18px;
        }

        .title {
            font-size: 26px;
            font-weight: 600;
            letter-spacing: 0.02em;
            color: #111827;
        }

        .subtitle {
            font-size: 13px;
            color: #6b7280;
            margin-top: 4px;
        }

        .badge-pill {
            padding: 6px 12px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 500;
            background: #eef2ff;
            color: #4338ca;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 18px;
        }

        th, td {
            padding: 10px 12px;
            text-align: left;
            font-size: 14px;
        }

        th {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: #6b7280;
            border-bottom: 1px solid #e5e7eb;
            background: #f9fafb;
        }

        tbody tr:nth-child(even) {
            background: #f9fafb;
        }

        tbody tr:hover {
            background: #eef2ff;
            transition: background 0.2s ease;
        }

        .status-pill {
            display: inline-flex;
            align-items: center;
            padding: 4px 10px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 500;
        }

        .status-pending {
            background: #fef3c7;
            color: #92400e;
        }

        .status-cancelled {
            background: #fee2e2;
            color: #991b1b;
        }

        .status-completed {
            background: #dcfce7;
            color: #166534;
        }

        .btn,
        .button-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 6px 12px;
            font-size: 12px;
            font-weight: 500;
            border-radius: 999px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            transition: transform 0.15s ease, box-shadow 0.15s ease, background 0.15s ease;
            margin-right: 6px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: #ffffff;
            box-shadow: 0 8px 16px rgba(79, 70, 229, 0.25);
        }

        .btn-outline {
            border: 1px solid #d1d5db;
            background: #ffffff;
            color: #4b5563;
        }

        .btn-danger {
            background: #fee2e2;
            color: #b91c1c;
            border: 1px solid #fecaca;
        }

        .btn:hover,
        .button-link:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 16px rgba(15, 23, 42, 0.12);
        }

        .btn-danger:hover {
            background: #fecaca;
        }

        .empty-state {
            text-align: center;
            padding: 40px 10px 20px;
            color: #6b7280;
            font-size: 14px;
        }

        .empty-state span {
            font-size: 32px;
            display: block;
            margin-bottom: 10px;
        }

        .message {
            padding: 10px 14px;
            border-radius: 10px;
            font-size: 13px;
            margin-bottom: 14px;
        }

        .message-success {
            background: #ecfdf5;
            color: #166534;
            border: 1px solid #bbf7d0;
        }

        .message-error {
            background: #fef2f2;
            color: #b91c1c;
            border: 1px solid #fecaca;
        }
    </style>
</head>
<body>

<div class="page-wrapper">
    <div class="card">

        <div class="header-row">
            <div>
                <div class="title">My Booking History</div>
                <div class="subtitle">
                    Track your salon visits, payments and loyalty points in one place.
                </div>
            </div>

            <div class="badge-pill">
                Total bookings: {{ $bookings->count() }}
            </div>
        </div>

        {{-- Flash messages --}}
        @if(session('success'))
            <div class="message message-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="message message-error">{{ session('error') }}</div>
        @endif

        @if($bookings->isEmpty())
            <div class="empty-state">
                <span>💇‍♀️</span>
                You have no bookings yet. Once you start booking services, they’ll appear here.
            </div>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Booking #</th>
                        <th>Service</th>
                        <th>Price (BDT)</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Payment Status</th>
                        <th>Loyalty Points</th>
                        <th style="text-align:right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                        <tr>
                            <td>{{ $booking->invoice_number ?? $booking->booking_number ?? ('BK-' . $booking->id) }}</td>
                            <td>{{ $booking->service_name }}</td>
                            <td>{{ number_format($booking->service_price, 2) }}</td>
                            <td>{{ $booking->booking_date }}</td>
                            <td>{{ $booking->booking_time }}</td>
                            <td>
                                <span class="status-pill status-{{ strtolower($booking->payment_status) }}">
                                    {{ ucfirst($booking->payment_status) }}
                                </span>
                            </td>
                            <td>{{ $booking->loyalty_points_earned ?? 0 }}</td>
                            <td style="text-align:right;">
                                <a href="{{ route('bookings.show', $booking) }}"
                                   class="button-link btn btn-outline">
                                    View
                                </a>

                                <a href="{{ route('bookings.invoice', $booking) }}"
                                   class="button-link btn btn-primary">
                                    Invoice
                                </a>

                                @if(strtolower($booking->payment_status) !== 'cancelled')
                                    <form action="{{ route('bookings.cancel', $booking) }}"
                                          method="POST"
                                          style="display:inline;">
                                        @csrf
                                        <button type="submit"
                                                class="btn btn-danger"
                                                onclick="return confirm('Cancel this booking?');">
                                            Cancel
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>

</body>
</html>
