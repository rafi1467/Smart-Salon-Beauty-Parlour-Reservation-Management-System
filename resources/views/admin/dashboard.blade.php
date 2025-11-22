<style>
  body {
    background-color: #F0F4F8; /* Secondary */
    color: #2C3E50;          /* Text */
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

    .card {
    background-color: #FFFFFF;
    border-radius: 8px;
    padding: 24px;
    margin-bottom: 20px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

.text-primary { color: #5D8AA8; }
.text-accent  { color: #E2725B; }
.text-highlight { color: #88B04B; }
.text-main    { color: #2C3E50; }

</style>    

<body>
<h1 class="text-primary">Admin Dashboard</h1>

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">

    <div class='card'>
        <h3 class='text-main'>Appointments</h3>
        <p>Bookings Today: </p>
        <p>Upcoming Confrimed: </p>
</div>

<div class='card'>
    <h3 class='text-main'>Sales</h3>
    <p>Today's Sales: <strong class='text-highlight'>BDT</strong> </p>
    <p>This Month's Sales: <strong class='text-highlight'>BDT</strong> </p>
</div>

<div class='card'>
    <h3 class='text-main'>Customer Data</h3>
    <p>Total Customers: </p>
    <p>New Customers This Month: </p>
</div>
</body>