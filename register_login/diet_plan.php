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
</head>
<body>
<h1>Customer Dashboard</h1>
<a href="member.php" class="btn">Go to <menu></menu></a>
</head>
    <title>Diet Plan</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background-color: #f4f4f4; 
        }
        .container { 
            max-width: 800px; 
            margin: 50px auto; 
            padding: 20px; 
            background: #fff; 
            border-radius: 10px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
        }
        h2 { 
            text-align: center; 
            color: #333; 
        }
        .diet-plan { 
            display: flex; 
            flex-direction: column; 
            gap: 20px; 
        }
        .meal { 
            background-color: #e9f7ef; 
            padding: 15px; 
            border-left: 5px solid #28a745; 
            border-radius: 5px; 
            display: flex; 
            align-items: center;
        }
        .meal h3 { 
            color: #28a745; 
            margin-top: 0; 
        }
        .meal ul { 
            list-style-type: none; 
            padding: 0; 
            margin: 0; 
        }
        .meal ul li { 
            margin: 5px 0; 
        }
        .meal img { 
            width: 80px; 
            height: 80px; 
            border-radius: 10px; 
            margin-right: 15px; 
        }
        .image-container { 
            text-align: center; 
        }
        .image-container img { 
            max-width: 100%; 
            height: auto; 
            border-radius: 10px; 
            margin-top: 20px; 
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
    <div class="container">
        <h2>Customized Diet Plan</h2>
        <div class="diet-plan">
            <div class="meal">
                <img src="images/a.jpeg" alt="Breakfast" />
                <div>
                    <h3>Breakfast</h3>
                    <ul>
                        <li>Oatmeal with fruits and nuts</li>
                        <li>1 boiled egg</li>
                        <li>1 glass of low-fat milk or almond milk</li>
                    </ul>
                </div>
            </div>
            <div class="meal">
                <img src="images/b.jpg" alt="Mid-Morning Snack" />
                <div>
                    <h3>Mid-Morning Snack</h3>
                    <ul>
                        <li>1 Apple or Banana</li>
                        <li>A handful of almonds or walnuts</li>
                    </ul>
                </div>
            </div>
            <div class="meal">
                <img src="images/c.jpg" alt="Lunch" />
                <div>
                    <h3>Lunch</h3>
                    <ul>
                        <li>Grilled chicken or tofu with quinoa</li>
                        <li>Mixed greens salad with olive oil dressing</li>
                        <li>Steamed vegetables (broccoli, carrots, zucchini)</li>
                    </ul>
                </div>
            </div>
            <div class="meal">
                <img src="images/d.jpg" alt="Afternoon Snack" />
                <div>
                    <h3>Afternoon Snack</h3>
                    <ul>
                        <li>Greek yogurt with berries</li>
                        <li>1 tablespoon of chia seeds</li>
                    </ul>
                </div>
            </div>
            <div class="meal">
                <img src="images/e.jpg" alt="Dinner" />
                <div>
                    <h3>Dinner</h3>
                    <ul>
                        <li>Salmon or chickpeas with sweet potatoes</li>
                        <li>Steamed asparagus or green beans</li>
                        <li>1 bowl of mixed green salad</li>
                    </ul>
                </div>
            </div>
            <div class="meal">
                <img src="images/f.jpg" alt="Evening Snack" />
                <div>
                    <h3>Evening Snack (Optional)</h3>
                    <ul>
                        <li>Herbal tea (chamomile or green tea)</li>
                        <li>2 squares of dark chocolate (70% cacao or higher)</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="image-container">
            <img src="images/diet-plan-overview.jpg" alt="Healthy diet plan" />
        </div>
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
