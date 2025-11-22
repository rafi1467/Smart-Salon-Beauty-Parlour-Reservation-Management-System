<style>
    body {
    background-color: #F0F4F8; /* Secondary */
    color: #2C3E50;          /* Text */
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.text-primary { color: #5D8AA8; }
.text-accent  { color: #E2725B; }
.text-highlight { color: #88B04B; }
.text-main    { color: #2C3E50; } 

 .btn-success {
    background-color: #88B04B; /* Highlight */
}
.btn-success:hover {
    background-color: #6F903D;
}

.btn-danger {
    background-color: #E2725B; /* Accent */
}
.btn-danger:hover {
    background-color: #C95E4A;
}

.card {
    background-color: #FFFFFF;
    border-radius: 8px;
    padding: 24px;
    margin-bottom: 20px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}
</style>

<body>
<h2 class='text-primary'>Pending Booking</h2>

<div class='card'>
    <<h3 class='text-main'>Booking Details</h3>
    <p>Customer Name: </p>
    <p>Staff Name: </p>
    <p>Date & Time: </p>
    <p>Price: <strong class='text-highlight'>BDT</strong> </p>
</div>

<div style='display: flex; gap: 10px; margin-top: 10px;'>
    <form>
    <button class='btn-success'>Confirm Booking</button>
    </form>
    <form>
    <button class='btn-danger'>Cancel Booking</button>
    </form>
</div>
</body>