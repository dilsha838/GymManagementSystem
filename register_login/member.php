<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Dashboard</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    background-image: url('images/bacs.jpg');
    background-size: cover; 
    background-position: center;
    background-repeat: no-repeat;
    color: white;
    margin: 0;
    padding: 0;
}

        .dashboard {
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            text-align: center;
        }
        .dashboard a {
            display: block;
            padding: 10px;
            margin: 10px 0;
            background: #677;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .dashboard a:hover {
            background-color: #467;
        }
        h1, h2 {
            color: black;
        }

        .footer {
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    text-align: center;
    padding: 20px;
    margin-top: 20px;
    font-size: 14px;
    border-top: 1px solid #677;
}
.footer a {
    color: #467;
    text-decoration: none;
    margin: 0 5px;
}
.footer a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <h1>Customer Dashboard</h1>
    <a href="../index.html" class="btn">Go to Home</a>
    <div class="dashboard">
        <h2>Welcome to the Fitzone Gym Dashboard</h2>
        <a href="diet_plan.php">Diet Plan</a>
        <a href="purchase.php">Product Purchase</a>
        <a href="membership_form.php">membership</a>
        <a href="schedule.php">Scheduled Viewing</a>
        <a href="price.php"> pricing packages</a>
        <a href="logout.php">Logout</a>
    </div>

    <footer>
    <div class="footer">
        <p>&copy; 2024 Fitzone Gym. All rights reserved.</p>
        <p>Contact us: <a href="mailto:info@fitzonegym.com">info@fitzonegym.com</a> | Phone: (123) 456-7890</p>
        <p>Follow us on:
            <a href="#" style="color: #fff;">Facebook</a> |
            <a href="#" style="color: #fff;">Twitter</a> |
            <a href="#" style="color: #fff;">Instagram</a>
        </p>
    </div>
</footer>

</body>
</html>
