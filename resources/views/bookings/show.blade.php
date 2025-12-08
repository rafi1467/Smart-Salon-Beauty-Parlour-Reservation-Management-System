<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>

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
            background: radial-gradient(circle at top, #eef2ff 0, #f9fafb 60%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 16px;
            color: #111827;
        }

        .card {
            width: 100%;
            max-width: 640px;
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 22px 45px rgba(15, 23, 42, 0.18);
            padding: 26px 28px 24px;
        }

        .card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 14px;
        }

        .title-row {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .icon-badge {
            width: 40px;
            height: 40px;
            border-radius: 14px;
            background: linear-gradient(135deg, #6366f1, #ec4899);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 22px;
        }

        .title {
            font-size: 22px;
            font-weight: 600;
            letter-spacing: 0.03em;
        }

        .sub {
            font-size: 12px;
            color: #6b7280;
        }

        .status-pill {
            padding: 6px 12px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 500;
            background: #fef3c7;
            color: #92400e;
        }

        .status-completed {
            background: #dcfce7;
            color: #166534;
        }

        .status-cancelled {
            background: #fee2e2;
            color: #991b1b;
        }

        .divider {
            margin: 16px 0;
            border: none;
            border-top: 1px dashed #e5e7eb;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px 32px;
            font-size: 14px;
        }

        .info-label {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #9ca3af;
            margin-bottom: 2px;
        }

        .info-value {
            font-weight: 500;
            color: #111827;
        }

        .highlight-number {
            font-family: monospace;
            font-size: 15px;
            padding: 4px 8px;
            border-radius: 8px;
            background: #f3f4f6;
        }

        .loyalty {
            margin-top: 14px;
            font-size: 13px;
            color: #4b5563;
        }

        .loyalty span {
            font-weight: 600;
            color: #16a34a;
        }

        .actions {
            margin-top: 20px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .button-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 8px 16px;
            border-radius: 999px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .btn-primary {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: #ffffff;
            box-shadow: 0 10px 18px rgba(79, 70, 229, 0.25);
        }

        .btn-secondary {
            background: #f3f4f6;
            color: #4b5563;
            border: 1px solid #d1d5db;
        }

        .button-link:hover {
            transform: translateY(-1px);
            box-shadow: 0 10px 18px rgba(15, 23, 42, 0.15);
        }

    </style>
</head>

<body>

<div class="card">

    <!-- Header -->
    <div class="card-header">
        <div class="title-row">
            <div class="icon-badge">💇‍♀️</div>
            <div>
                <div class="title">Booking Confirmation</div>
                <div class="sub">Your appointment has been registered successfully.</div>
            </div>
        </div>

        @php
            $statusClass = 'status-pill';
            $status = strtolower($booking->payment_status);
            if ($status === 'completed') $statusClass .= ' status-completed';
            elseif ($status === 'cancelled') $statusClass .= ' status-cancelled';
        @endphp

        <div class="{{ $statusClass }}">
            {{ ucfirst($booking->payment_status) }}
        </div>
    </div>

    <hr class="divider">

    <!-- Details -->
    <div class="info-grid">
        <div>
            <div class="info-label">Booking Number</div>
            <div class="info-value">
                <span class="highlight-number">{{ $booking->invoice_number ?? $booking->booking_number ?? 'BK-' . $booking->id }}</span>
            </div>
        </div>

        <div>
            <div class="info-label">Service</div>
            <div class="info-value">{{ $booking->service_name }}</div>
        </div>

        <div>
            <div class="info-label">Price</div>
            <div class="info-value">{{ number_format($booking->service_price, 2) }} BDT</div>
        </div>

        <div>
            <div class="info-label">Date & Time</div>
            <div class="info-value">{{ $booking->booking_date }} • {{ $booking->booking_time }}</div>
        </div>
    </div>

    <div class="loyalty">
        Loyalty Points Earned: <span>{{ $booking->loyalty_points_earned ?? 0 }}</span>
    </div>

    <!-- Buttons -->
    <div class="actions">
        <a href="{{ route('bookings.invoice', $booking) }}" class="button-link btn-primary">
            View Invoice
        </a>

        <a href="{{ route('bookings.index') }}" class="button-link btn-secondary">
            Back to History
        </a>
    </div>

</div>

</body>
</html>
