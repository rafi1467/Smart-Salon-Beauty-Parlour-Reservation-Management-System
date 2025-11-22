<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/images/WhatsApp_Image_2025-11-17_at_00.14.30-removebg-preview.png"/>
<<<<<<< HEAD
    <title>SmartV</title>
=======
    <title>SmartV</title>
    <style>
     /* ===== Global ===== */
body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: #f4f6fb;
    display: flex;
    height: 100vh;
}

/* ===== Sidebar ===== */
.sidebar {
    width: 240px;
    background: #111827;
    color: white;
    padding: 20px 0;
    position: fixed;
    height: 100%;
}

.sidebar .logo {
    font-size: 26px;
    font-weight: 700;
    text-align: center;
    margin-bottom: 30px;
}

.sidebar .menu {
    list-style: none;
    padding: 0;
}

.sidebar .menu li {
    padding: 15px 25px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

.sidebar .menu li i {
    width: 25px;
}

.sidebar .menu li:hover,
.sidebar .menu .active {
    background: #1f2937;
    color: #38bdf8;
}

/* ===== Main Content ===== */
.main {
    margin-left: 240px;
    width: calc(100% - 240px);
    padding: 25px;
}

/* ===== Top Bar ===== */
.topbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.topbar h1 {
    font-size: 28px;
}

.topbar .profile {
    display: flex;
    align-items: center;
}

.topbar input {
    padding: 8px 12px;
    border-radius: 12px;
    border: 1px solid #ddd;
    margin-right: 15px;
}

.topbar img {
    border-radius: 50%;
    margin-left: 15px;
}

/* ===== Dashboard Cards ===== */
.cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    margin-top: 25px;
}

.card {
    background: white;
    padding: 25px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    gap: 20px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-5px);
}

.icon {
    padding: 20px;
    border-radius: 12px;
    font-size: 22px;
    color: white;
}

.bg1 { background: #6366f1; }
.bg2 { background: #f43f5e; }
.bg3 { background: #10b981; }
.bg4 { background: #f59e0b; }

/* ===== Tables Section ===== */
.tables {
    margin-top: 40px;
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 25px;
}

.table {
    background: white;
    padding: 20px;
    border-radius: 16px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
}

.table h2 {
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table tr th,
table tr td {
    padding: 12px;
    border-bottom: 1px solid #eee;
}

/* ===== Customers List ===== */
.customers ul {
    list-style: none;
    padding: 0;
}

.customers ul li {
    display: flex;
    align-items: center;
    padding: 12px 0;
}

.customers ul li img {
    border-radius: 50%;
    margin-right: 15px;
}

    </style>
>>>>>>> 8b7e068fa9d16e605d7146a6609cd49d7518f22c
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2 class="logo">SmartV</h2>

        <ul class="menu">
            <li class="active"><i class="fa fa-home"></i> Dashboard</li>
            <li><i class="fa fa-calendar-check"></i> Appointments</li>
            <li><i class="fa fa-scissors"></i> Services</li>
            <li><i class="fa fa-users"></i> Customers</li>
            <li><i class="fa fa-user-tie"></i> Stylists</li>
            <li><i class="fa fa-cog"></i> Settings</li>
            <li><i class="fa fa-right-from-bracket"></i> Logout</li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main">

        <!-- Top Bar -->
        <div class="topbar">
            <h1>Dashboard</h1>

            <div class="profile">
                <input type="text" placeholder="Search...">
                <i class="fa fa-bell"></i>
                <img src="https://i.pravatar.cc/40" alt="">
            </div>
        </div>

        <!-- Dashboard Cards -->
        <div class="cards">

            <div class="card">
                <div class="icon bg1"><i class="fa fa-calendar-check"></i></div>
                <div class="text">
                    <h3>120</h3>
                    <p>Today's Appointments</p>
                </div>
            </div>

            <div class="card">
                <div class="icon bg2"><i class="fa fa-users"></i></div>
                <div class="text">
                    <h3>540</h3>
                    <p>Total Customers</p>
                </div>
            </div>

            <div class="card">
                <div class="icon bg3"><i class="fa fa-scissors"></i></div>
                <div class="text">
                    <h3>35</h3>
                    <p>Available Stylists</p>
                </div>
            </div>

            <div class="card">
                <div class="icon bg4"><i class="fa fa-dollar-sign"></i></div>
                <div class="text">
                    <h3>$4,580</h3>
                    <p>Today Revenue</p>
                </div>
            </div>
        </div>

        <!-- Tables Section -->
        <div class="tables">
            
            <!-- Appointments Table -->
            <div class="table appointments">
                <h2>Recent Appointments</h2>
                <table>
                    <tr>
                        <th>Customer</th>
                        <th>Service</th>
                        <th>Stylist</th>
                        <th>Time</th>
                    </tr>

                    <tr>
                        <td>Sarah Khan</td>
                        <td>Haircut</td>
                        <td>John</td>
                        <td>10:00 AM</td>
                    </tr>

                    <tr>
                        <td>Arif Rahman</td>
                        <td>Beard Trim</td>
                        <td>David</td>
                        <td>11:30 AM</td>
                    </tr>

                    <tr>
                        <td>Mim Akter</td>
                        <td>Hair Coloring</td>
                        <td>Lisa</td>
                        <td>1:00 PM</td>
                    </tr>

                </table>
            </div>

            <!-- Customers List -->
            <div class="table customers">
                <h2>New Customers</h2>

                <ul>
                    <li><img src="https://i.pravatar.cc/40?img=5"> <span>Amira Haque</span></li>
                    <li><img src="https://i.pravatar.cc/40?img=8"> <span>Kamrul Islam</span></li>
                    <li><img src="https://i.pravatar.cc/40?img=12"> <span>Faria Ahmed</span></li>
                    <li><img src="https://i.pravatar.cc/40?img=15"> <span>Nadim Hasan</span></li>
                </ul>
            </div>

        </div>
    </div>
</body>
</html>