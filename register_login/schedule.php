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
    <title>Scheduled Viewing</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }
        .container { max-width: 1200px; margin: 50px auto; padding: 20px; background: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); }
        h2 { text-align: center; color: #333; }
        .schedule { display: flex; flex-direction: column; gap: 20px; }
        .session-card { display: flex; align-items: center; background-color: #e9f7ef; padding: 15px; border-radius: 8px; border-left: 5px solid #28a745; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); }
        .session-card img { width: 150px; height: 100px; border-radius: 5px; margin-right: 15px; }
        .session-info { flex: 1; }
        .session-info h3 { margin: 0; color: #28a745; }
        .session-info p { margin: 5px 0; color: #666; }
        .session-time { font-weight: bold; color: #333; }
    </style>
</head>
</head>
<body>
<h1>Customer Dashboard</h1>
<a href="member.php" class="btn">Go to <menu></menu></a>
</head>

<body>
    <div class="container">
        <h2>Class and Training Schedule</h2>
        <div class="schedule">
            <!-- Session 1 -->
            <div class="session-card">
                <img src="images/yoga.jpg" alt="Yoga Class">
                <div class="session-info">
                    <h3>Yoga Class</h3>
                    <p>Improve flexibility and relax your mind with our morning yoga session.</p>
                    <p class="session-time">Time: 8:00 AM - 9:00 AM</p>
                </div>
            </div>
            
            <!-- Session 2 -->
            <div class="session-card">
                <img src="images/cardio.jpeg" alt="Cardio Blast">
                <div class="session-info">
                    <h3>Cardio Blast</h3>
                    <p>High-intensity cardio workout to get your heart pumping.</p>
                    <p class="session-time">Time: 10:00 AM - 11:00 AM</p>
                </div>
            </div>
            
            <!-- Session 3 -->
            <div class="session-card">
                <img src="images/strength.jpg" alt="Strength Training">
                <div class="session-info">
                    <h3>Strength Training</h3>
                    <p>Build muscle strength and endurance with expert guidance.</p>
                    <p class="session-time">Time: 1:00 PM - 2:00 PM</p>
                </div>
            </div>

             <!-- Session 4 -->
             <div class="session-card">
                <img src="images/gymnastic.jpg" alt="Gymnastic">
                <div class="session-info">
                    <h3>Gymnastict</h3>
                    <p>High-intensity  to get your heart pumping.</p>
                    <p class="session-time">Time: 10:00 AM - 11:00 AM</p>
                </div>
            </div>

             <!-- Session 5 -->
             <div class="session-card">
                <img src="images/karate.jpg" alt="Karate">
                <div class="session-info">
                    <h3>Karate</h3>
                    <p>High-intensity  to get your heart pumping.</p>
                    <p class="session-time">Time: 10:00 AM - 11:00 AM</p>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
