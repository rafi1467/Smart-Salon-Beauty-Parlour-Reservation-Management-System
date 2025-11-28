@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <h1 class="text-primary mb-4">Admin Dashboard</h1>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-bottom: 30px;">
        
        <div class="card" style="border-left: 5px solid #5D8AA8;">
            <h3 class="text-main">Appointments</h3>
            <p>Today: <strong class="text-primary" style="font-size: 1.2em;">{{ $todaysBookings }}</strong></p>
            <p>Upcoming: <strong class="text-primary">{{ $upcomingBookings }}</strong></p>
        </div>

        <div class="card" style="border-left: 5px solid #88B04B;">
            <h3 class="text-main">Sales Revenue</h3>
            <p>Today: <strong class="text-highlight" style="font-size: 1.2em;">৳ {{ number_format($todaysSales, 2) }}</strong></p>
            <p>This Month: <strong class="text-highlight">৳ {{ number_format($monthlySales, 2) }}</strong></p>
        </div>

        <div class="card" style="border-left: 5px solid #E2725B;">
            <h3 class="text-main">Growth</h3>
            <p>New Customers: <strong class="text-accent" style="font-size: 1.2em;">+{{ $newCustomers }}</strong></p>
            <small class="text-muted">Since start of month</small>
        </div>
    </div>

    @endsection

    <div class="card">
        <h3 class="text-primary">Sales Overview (This Year)</h3>
        <canvas id="salesChart" height="100"></canvas>
    </div>
</div>

<script>
    const ctx = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(ctx, {
        type: 'line',
        data: {
            // You can pass dynamic data from Laravel here using json_encode
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Monthly Sales (BDT)',
                data: [12000, 19000, 3000, 5000, 20000, 30000, 45000, 25000, 35000, 40000, 0, 0], // Example Data
                borderColor: '#5D8AA8', // Corporate Blue
                backgroundColor: 'rgba(93, 138, 168, 0.2)',
                borderWidth: 2,
                fill: true
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>