

<div class="container-fluid">
    <h1 class="text-primary mb-4">Admin Dashboard</h1>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-bottom: 30px;">
        
        <div class="card" style="border-left: 5px solid #5D8AA8;">
            <h3 class="text-main">Appointments</h3>
            <p>Today: </p>
            <p>Upcoming: </p>
        </div>

        <div class="card" style="border-left: 5px solid #88B04B;">
            <h3 class="text-main">Sales Revenue</h3>
            <p>Today: </p>
            <p>This Month: </p>
        </div>

        <div class="card" style="border-left: 5px solid #E2725B;">
            <h3 class="text-main">Growth</h3>
            <p>New Customers: </p>
            <small class="text-muted">Since start of month</small>
        </div>
    </div>

    <div class="card">
        <h3 class="text-primary">Sales Overview (This Year)</h3>
        <canvas id="salesChart" height="100"></canvas>
    </div>
</div>


