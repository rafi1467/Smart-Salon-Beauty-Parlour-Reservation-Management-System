<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Invoice #{{ $booking->invoice_number ?? $booking->booking_number ?? $booking->id }}</title>

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
            padding: 40px 16px;
            color: #111827;
        }

        .invoice-wrapper {
            max-width: 800px;
            margin: 0 auto;
        }

        .invoice-card {
            background: #ffffff;
            border-radius: 18px;
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.15);
            padding: 28px 32px 30px;
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .brand {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .brand-name {
            font-size: 22px;
            font-weight: 600;
            letter-spacing: 0.03em;
            color: #4f46e5;
        }

        .brand-tagline {
            font-size: 12px;
            color: #6b7280;
        }

        .invoice-meta {
            text-align: right;
            font-size: 13px;
            color: #4b5563;
        }

        .invoice-meta-title {
            font-size: 22px;
            font-weight: 600;
            color: #111827;
            margin-bottom: 6px;
        }

        .chip {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 999px;
            background: #eef2ff;
            color: #4338ca;
            font-size: 11px;
            font-weight: 500;
            margin-top: 6px;
        }

        hr {
            border: none;
            border-top: 1px solid #e5e7eb;
            margin: 18px 0;
        }

        .section-title {
            font-size: 13px;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: #9ca3af;
            margin-bottom: 6px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            font-size: 14px;
            margin-bottom: 4px;
        }

        .info-label {
            font-weight: 500;
            color: #4b5563;
        }

        .info-value {
            color: #111827;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 14px;
        }

        th, td {
            padding: 10px 12px;
            font-size: 14px;
            text-align: left;
        }

        th {
            background: #f3f4f6;
            color: #6b7280;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        tbody tr:nth-child(even) {
            background: #f9fafb;
        }

        .totals {
            margin-top: 16px;
            text-align: right;
            font-size: 14px;
        }

        .totals p {
            margin: 2px 0;
        }

        .totals strong {
            font-size: 16px;
        }

        .loyalty-row {
            margin-top: 14px;
            font-size: 13px;
            color: #4b5563;
        }

        .loyalty-highlight {
            font-weight: 600;
            color: #16a34a;
        }

        .footer {
            margin-top: 24px;
            font-size: 11px;
            color: #9ca3af;
            text-align: center;
        }

        .actions {
            margin-top: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .button-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 8px 14px;
            border-radius: 999px;
            border: none;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: transform 0.15s ease, box-shadow 0.15s ease, background 0.15s ease;
        }

        .btn-secondary {
            background: #f9fafb;
            color: #4b5563;
            border: 1px solid #e5e7eb;
        }

        .btn-primary {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: #ffffff;
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.25);
        }

        .button-link:hover {
            transform: translateY(-1px);
            box-shadow: 0 10px 18px rgba(15, 23, 42, 0.15);
        }

        @media (max-width: 640px) {
            .invoice-card {
                padding: 20px 18px;
            }

            .invoice-header {
                flex-direction: column;
                gap: 8px;
            }

            .invoice-meta {
                text-align: left;
            }
        }
    </style>
</head>
<body>

<div class="invoice-wrapper">
    <div class="invoice-card">

        <div class="invoice-header">
            <div class="brand">
                <div class="brand-name">Smart Salon &amp; Beauty Parlour</div>
                <div class="brand-tagline">Dhaka, Bangladesh • Phone: +8801XXXXXXXXX</div>
                <div class="brand-tagline">Look good, feel amazing ✨</div>
            </div>

            <div class="invoice-meta">
                <div class="invoice-meta-title">Invoice</div>
                <div>Invoice #:
                    <strong>{{ $booking->invoice_number ?? $booking->booking_number ?? $booking->id }}</strong>
                </div>
                <div>Date: <strong>{{ $booking->booking_date }}</strong></div>
                <div class="chip">
                    Status: {{ ucfirst($booking->payment_status) }}
                </div>
            </div>
        </div>

        <hr>

        <div class="section-title">Booking Details</div>
        <div class="info-row">
            <div class="info-label">Customer Name</div>
            <div class="info-value">
                (later connect with user table)
            </div>
        </div>
        <div class="info-row">
            <div class="info-label">Booking Time</div>
            <div class="info-value">{{ $booking->booking_time }}</div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Service</th>
                    <th style="width: 140px; text-align:right;">Price (BDT)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $booking->service_name }}</td>
                    <td style="text-align:right;">{{ number_format($booking->service_price, 2) }}</td>
                </tr>
            </tbody>
        </table>

        <div class="totals">
            <p>Subtotal: {{ number_format($booking->service_price, 2) }} BDT</p>
            {{-- later: discount from loyalty points, taxes, etc. --}}
            <p><strong>Total: {{ number_format($booking->service_price, 2) }} BDT</strong></p>
        </div>

        <div class="loyalty-row">
            Loyalty Points Earned:
            <span class="loyalty-highlight">{{ $booking->loyalty_points_earned ?? 0 }}</span>
        </div>

        <div class="actions">
            <a href="{{ route('bookings.index') }}" class="button-link btn-secondary">
                ← Back to Booking History
            </a>

            {{-- placeholder for "Download PDF" or "Print" later --}}
            <button class="button-link btn-primary" onclick="window.print();">
                Print Invoice
            </button>
        </div>

        <div class="footer">
            Thank you for choosing Smart Salon &amp; Beauty Parlour.  
            This is a system generated invoice for your records.
        </div>
    </div>
</div>

</body>
</html>
