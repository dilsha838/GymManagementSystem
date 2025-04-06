<?php
@include 'config.php';



if (isset($_POST['add_product'])) {
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_image = $_FILES['p_image']['name'];
    $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
    $p_image_tmp_folder = 'uploaded_img/' . $p_image; 

    $insert_query = mysqli_query($conn, "INSERT INTO products (name, price, image) VALUES ('$p_name', '$p_price', '$p_image')") 
    or die('Query failed');

    if ($insert_query){
        move_uploaded_file($p_image_tmp_name, $p_image_tmp_folder);
        $message[] = 'Product add succesfully';
    }else {
        $message[] = 'Could not add the product';
    };
};

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conn, "DELETE FROM `products` WHERE id = $delete_id ") or die
    ('query failed');
    if($delete_query){
        $message[] = 'product has been deleted';
    }else{
        header(location:admin.php);
        $message[] = 'product  could not be deleted';
    };
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin Page</title>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
<h1>admin Dashboard</h1>
<a href="../index.html" class="btn">Go to Home</a>
</head>
<body>
    <nav>
        <ul>
          
            <!-- Other links -->
        </ul>
    </nav>
    <!-- Page content -->
</body>
</html>

<?php


if(isset($message)){
    foreach($message as $message){
        echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times"  onclick="this.
        parentElement.style.display = `none`;"></i>  </div>';

    };
};


?>


<?php include 'header.php';?>

    <div class="container">
        <section>
            <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
                <h3>Add a New Product</h3>
                <input type="text" name="p_name" placeholder="Enter the product name" class="box" required>
                <input type="number" name="p_price" min="0" placeholder="Enter the product price" class="box" required>
                <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
                <input type="submit" value="Add the Product" name="add_product" class="btn">
            </form>

        </section>

        <section class="display-product-table">
            <table>

            <thead>
                <th>product image</th>
                <th>product name</th>
                <th>product price</th>
                <th>action</th>
            </thead>

            <tbody>
                <?php

                $select_products = mysqli_query($conn, "SELECT * FROM `products`");
                if(mysqli_num_rows($select_products) > 0){
                    while($row = mysqli_fetch_assoc($select_products)){
                ?>

                <tr>
                    <td><img src="uploaded_img/<?php echo $row['image']; ?> "height="100" alt=""></td>
                    <td><?php echo $row['name']; ?></td>
                    <td>$<?php echo $row['price']; ?>/-</td>
                    <td>
                        <a href="admin.php?delete=<?php echo $row['id']; ?>" class="delete-btn" 
                         onclick = "return confirm('are your sure you want to delete this?');"> <i 
                         class="fas fa-trash"></i> delete </a>
                         
                    </td>
                    </tr>

                    
                <?php
                    };
                }else{
                    echo "<div class='empty'>no product added</div>";
                }
                
                ?>



    </div>

    <!-- Custom JS file link -->
    <script src="js/script.js"></script>

</body>
</html>
