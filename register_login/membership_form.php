<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require 'db_config.php';

$message = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $membership_type = $_POST['membership_type'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/^\+?[0-9]*$/', $phone)) {
        $stmt = $conn->prepare("INSERT INTO membership (name, email, phone, membership_type) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $phone, $membership_type);

        if ($stmt->execute()) {
            $message = "<p style='color: green;'>Thank you, $name! Your membership registration has been successfully received.</p>";
        } else {
            $message = "<p style='color: red;'>An error occurred. Please try again later.</p>";
        }
        $stmt->close();
    } else {
        $message = "<p style='color: red;'>Please enter valid email and phone number.</p>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Registration</title>
    <a href="member.php" class="btn">Go to <menu></menu></a>
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-image: url('images/234.jpg');
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .form-container {
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        label {
            font-weight: bold;
            color: #333;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
        }
        .submit-btn {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .submit-btn:hover {
            background-color: #218838;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        /* Responsive layout */
        @media (min-width: 600px) {
            .container {
                flex-direction: row;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Membership Registration</h2>
            <?php if ($message): echo $message; endif; ?>
            <form action="membership_form.php" method="POST">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="membership_type">Membership Type</label>
                <select id="membership_type" name="membership_type" required>
                    <option value="basic">Basic</option>
                    <option value="premium">Premium</option>
                    <option value="vip">VIP</option>
                </select>

                <button type="submit" class="submit-btn">Submit Registration</button>
            </form>
        </div>
        <div class="image-container">
            <img src="images/Screenshot_1.png" alt="Gym Membership">
        </div>
    </div>
    
</body>
</html>
