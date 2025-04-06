<?php
include('db_config.php');
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?")) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $id;
                $_SESSION['username'] = $username;
                header("location:member.php");
                exit();

            } else {
                echo "Invalid password.";
            }
        } else {
            echo "Username not found.";
        }

        $stmt->close();
    } else {
        die("Statement preparation failed: " . $conn->error);
    }

    $conn->close();
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="style.css">

</head>
</head>
<body>

<a href="../index.html" class="btn">Go to Home</a>
</head>
<body>
<body>
<body>
    <form action="login.php" method="post" class="form-container">
        <h2>Login</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        
        <button type="submit">Login</button>
    </form>





    
</body>
</html>
