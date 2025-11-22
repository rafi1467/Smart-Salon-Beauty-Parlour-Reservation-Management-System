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

.card {
    background-color: #FFFFFF;
    border-radius: 8px;
    padding: 24px;
    margin-bottom: 20px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

.form-group {
    margin-bottom: 1rem;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #CED4DA;
    border-radius: 4px;
    box-sizing: border-box; 
    color: #2C3E50;
}

.btn {
    padding: 10px 18px;
    border: none;
    border-radius: 5px;
    color: white;
    cursor: pointer;
    font-weight: bold;
    text-decoration: none;
    display: inline-block;
}

.btn-primary {
    background-color: #5D8AA8; /* Primary */
}
    </style>

<body>
   <div class='card'>
    <h2 class='text-primary'>Create New Service</h2>
    <form action='' method='POST'>
        <div class='form-group'>
            <label for='name'>Service Name:</label>
            <input type='text' id='name' name='name' class='form-control' required>
        </div>

        <div class='form-group'>
            <label for='price'>Price (BDT):</label>
            <input type='number' id='price' name='price' class='form-control' required>
        </div>

        <div class='form-group'>
            <label for='duration'>Duration (minutes):</label>
            <input type='number' id='duration' name='duration' class='form-control' required>
        </div>

        <button type='submit' class='btn btn-primary mt-4'>Create Service</button>
    </form>
    </div>

</body>    