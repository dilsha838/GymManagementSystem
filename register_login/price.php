<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Pricing Packages</title>
    <a href="member.php" class="btn">Go to <menu></menu></a>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .packages {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .package {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            padding: 20px;
            text-align: center;
        }
        .package h2 {
            color: #28a745;
            font-size: 24px;
            margin-top: 0;
        }
        .package .price {
            font-size: 32px;
            color: #333;
            margin: 15px 0;
        }
        .package p {
            color: #666;
            font-size: 14px;
            margin: 10px 0;
        }
        .package ul {
            list-style: none;
            padding: 0;
        }
        .package ul li {
            margin: 5px 0;
            font-size: 14px;
            color: #333;
        }
        .package button {
            background-color: #28a745;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .package button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Our Gym Membership Packages</h1>
        <div class="packages">
            <div class="package">
                <h2>Basic Package</h2>
                <p class="price">$29 / month</p>
                <ul>
                    <li>Access to gym facilities</li>
                    <li>Free group classes</li>
                    <li>1 personal training session</li>
                    <li>Locker room access</li>
                </ul>
                <button>Sign Up</button>
            </div>
            <div class="package">
                <h2>Premium Package</h2>
                <p class="price">$49 / month</p>
                <ul>
                    <li>All Basic Package benefits</li>
                    <li>Unlimited group classes</li>
                    <li>3 personal training sessions</li>
                    <li>Access to spa and sauna</li>
                </ul>
                <button>Sign Up</button>
            </div>
            <div class="package">
                <h2>VIP Package</h2>
                <p class="price">$79 / month</p>
                <ul>
                    <li>All Premium Package benefits</li>
                    <li>Unlimited personal training</li>
                    <li>Private locker</li>
                    <li>Free health assessment</li>
                    <li>Priority support</li>
                </ul>
                <button>Sign Up</button>
            </div>
        </div>
    </div>
</body>
</html>
