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
    <title>Product Purchase</title>
    <style>
        body { font-family: Arial, sans-serif;  background color: #000;;; margin: 0; padding: 0; }
        .container { max-width: 1200px; margin: 50px auto; padding: 20px; background: lightblue; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); }
        h2 { text-align: center; color: #333; }
        .products { display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; }
        .product-card { width: 300px; background-color: #fff; border: 1px solid #ddd; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); transition: transform 0.2s; }
        .product-card:hover { transform: scale(1.05); }
        .product-card img { width: 100%; height: auto; }
        .product-info { padding: 15px; text-align: center; }
        .product-info h3 { margin: 10px 0; font-size: 18px; color: #333; }
        .product-info p { color: #666; margin: 5px 0; }
        .product-info .price { font-size: 20px; color: #28a745; font-weight: bold; }
        .buy-btn { display: inline-block; padding: 10px 15px; margin-top: 10px; background-color: #28a745; color: #fff; border: none; border-radius: 5px; text-decoration: none; transition: background-color 0.2s; }
        .buy-btn:hover { background-color: #218838; }
    </style>
</head>
</head>
<body>
<h1>Customer Dashboard</h1>
<a href="member.php" class="btn">Go to <menu></menu></a>
</head>
<body>
    <div class="container">
        <h2>Available Products</h2>
        <div class="products">
            <!-- Product 1 -->
            <div class="product-card">
                <img src="images/no1.jpg" alt="Dumbbells">
                <div class="product-info">
                    <h3>Dumbbells Set</h3>
                    <p>High-quality adjustable dumbbells for home workouts.</p>
                    <p class="price">$40.00</p>
                    <a href="purchase_process.php?product_id=1" class="buy-btn">Buy Now</a>
                </div>
            </div>
            
            <!-- Product 2 -->
            <div class="product-card">
                <img src="images/no2.jpg" alt="Yoga Mat">
                <div class="product-info">
                    <h3>Yoga Mat</h3>
                    <p>Eco-friendly, non-slip yoga mat for a safe practice.</p>
                    <p class="price">$20.00</p>
                    <a href="purchase_process.php?product_id=2" class="buy-btn">Buy Now</a>
                </div>
            </div>
            
            <!-- Product 3 -->
            <div class="product-card">
                <img src="images/no3.jpg" alt="Protein Powder">
                <div class="product-info">
                    <h3>Protein Powder</h3>
                    <p>100% organic protein powder to support muscle growth.</p>
                    <p class="price">$30.00</p>
                    <a href="purchase_process.php?product_id=3" class="buy-btn">Buy Now</a>
                </div>
            </div>

              <!-- Product 4 -->
              <div class="product-card">
                <img src="images/no4.jpeg" alt="Man T-shirt">
                <div class="product-info">
                    <h3>man Tshirt</h3>
                    <p>Eco-friendly, best Metirial.</p>
                    <p class="price">$20.00</p>
                    <a href="purchase_process.php?product_id=4" class="buy-btn">Buy Now</a>
                </div>
            </div>

              <!-- Product 5 -->
              <div class="product-card">
                <img src="images/no5.jpeg" alt="Women Tshirt">
                <div class="product-info">
                    <h3>Women Tshirt</h3>
                    <p>Eco-friendly,best Metirial .</p>
                    <p class="price">$20.00</p>
                    <a href="purchase_process.php?product_id=5" class="buy-btn">Buy Now</a>
                </div>
            </div>

              <!-- Product 6 -->
              <div class="product-card">
                <img src="images/no6.jpeg" alt="Shoe">
                <div class="product-info">
                    <h3>Shoe</h3>
                    <p>Best Product.</p>
                    <p class="price">$20.00</p>
                    <a href="purchase_process.php?product_id=6" class="buy-btn">Buy Now</a>
                </div>
            </div>

              <!-- Product 7 -->
              <div class="product-card">
                <img src="images/no7.jpg" alt="Bottle">
                <div class="product-info">
                    <h3>Bottle</h3>
                    <p>Best Product.</p>
                    <p class="price">$20.00</p>
                    <a href="purchase_process.php?product_id=7" class="buy-btn">Buy Now</a>
                </div>
            </div>

              <!-- Product 8 -->
              <div class="product-card">
                <img src="images/no8.jpeg" alt="Cap">
                <div class="product-info">
                    <h3>Cap</h3>
                    <p>Best Metirial.</p>
                    <p class="price">$20.00</p>
                    <a href="purchase_process.php?product_id=8" class="buy-btn">Buy Now</a>
                </div>
            </div>

              <!-- Product 9 -->
              <div class="product-card">
                <img src="images/no9.jpeg" alt="Gloves">
                <div class="product-info">
                    <h3>Gloves</h3>
                    <p>Eco-friendl.Best Metirial</p>
                    <p class="price">$20.00</p>
                    <a href="purchase_process.php?product_id=9" class="buy-btn">Buy Now</a>
                </div>
            </div>

              <!-- Product 10 -->
              <div class="product-card">
                <img src="images/no10.jpg" alt="Belt">
                <div class="product-info">
                    <h3>Belt</h3>
                    <p>Best Metirial.</p>
                    <p class="price">$20.00</p>
                    <a href="purchase_process.php?product_id=10" class="buy-btn">Buy Now</a>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
