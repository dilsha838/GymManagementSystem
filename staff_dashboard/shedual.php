<?php
@include 'config.php';



if (isset($_POST['add_shedual'])) {
    $m_name = $_POST['m_name'];
    $m_weight = $_POST['m_weight'];
    $s_number = $_POST['s_number'];
    $s_image = $_FILES['s_image']['name'];
    $s_image_tmp_name = $_FILES['s_image']['tmp_name'];
    $s_image_tmp_folder = 'uploaded_img/' . $s_image; 

    $insert_query = mysqli_query($conn, "INSERT INTO shedual (name, weight,number, image) VALUES ('$m_name', '$m_weight','$s_number', '$s_image')") 
    or die('Query failed');

    if ($insert_query){
        move_uploaded_file($s_image_tmp_name, $s_image_tmp_folder);
        $message[] = 'shedual add succesfully';
    }else {
        $message[] = 'Could not add the shedual';
    };
};



if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conn, "DELETE FROM `shedual` WHERE id = $delete_id ") or die
    ('query failed');
    if($delete_query){
        $message[] = 'shedual has been deleted';
    }else{
        header(location:user.php);
        $message[] = 'shedual  could not be deleted';
    };
};

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Page</title>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
<header>
        <h1>Staff Dashboard</h1>
        <nav>
            <ul>
            <a href="../index.html" class="btn">Go to Home</a> 
            </ul>
        </nav>
    </header>
    
</head>
<body>
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
            <form action="" method="post" class="add-shedual-form" enctype="multipart/form-data">
                <h3>Add a New shedual</h3>
                <input type="text" name="m_name" placeholder="Enter the member name" class="box" required>
                <input type="text" name="m_weight" min="0" placeholder="Enter the member weight" class="box" required>
                <input type="text" name="s_number" min="0" placeholder="Enter the shedual number" class="box" required>
                <input type="file" name="s_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
                <input type="submit" value="Add the shedual" name="add_shedual" class="btn">
            </form>

        </section>

        <section class="display-shedual-table">
            <table>

            <thead>
                <th>shedual image</th>
                <th>member name</th>
                <th>member weight</th>
                <th>shedual number</th>
                <th>action</th>
            </thead>

            <tbody>
                <?php

                $select_shedual = mysqli_query($conn, "SELECT * FROM `shedual`");
                if(mysqli_num_rows($select_shedual) > 0){
                    while($row = mysqli_fetch_assoc($select_shedual)){
                ?>

                <tr>
                    <td><img src="uploaded_img/<?php echo $row['image']; ?> "height="200" alt=""></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['weight']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td>
                        <a href="shedual.php?delete=<?php echo $row['id']; ?>" class="delete-btn" 
                         onclick = "return confirm('are your sure you want to delete this?');"> <i 
                         class="fas fa-trash"></i> delete </a>
                         
                    </td>
                    </tr>

                    
                <?php
                    };
                }else{
                    echo "<div class='empty'>no shedual added</div>";
                }
                
                ?>



    </div>

    <!-- Custom JS file link -->
    <script src="js/script.js"></script>

</body>
</html>
