<?php
@include 'config.php';



if (isset($_POST['add_member'])) {
    $m_name = $_POST['m_name'];
    $m_role = $_POST['m_role'];
    $m_image = $_FILES['m_image']['name'];
    $m_image_tmp_name = $_FILES['m_image']['tmp_name'];
    $m_image_tmp_folder = 'uploaded_img/' . $m_image; // Correct concatenation

    $insert_query = mysqli_query($conn, "INSERT INTO member (name, role, image) VALUES ('$m_name', '$m_role', '$m_image')") 
    or die('Query failed');

    if ($insert_query){
        move_uploaded_file($m_image_tmp_name, $m_image_tmp_folder);
        $message[] = 'member add succesfully';
    }else {
        $message[] = 'Could not add the member';
    };
};



if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conn, "DELETE FROM `member` WHERE id = $delete_id ") or die
    ('query failed');
    if($delete_query){
        $message[] = 'member has been deleted';
    }else{
        header(location:user.php);
        $message[] = 'member  could not be deleted';
    };
};

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="style.css">

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
            <form action="" method="post" class="add-member-form" enctype="multipart/form-data">
                <h3>Add a New member</h3>
                <input type="text" name="m_name" placeholder="Enter the member name" class="box" required>
                <input type="text" name="m_role" min="0" placeholder="Enter the member role" class="box" required>
                <input type="file" name="m_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
                <input type="submit" value="Add the member" name="add_member" class="btn">
            </form>

        </section>

        <section class="display-member-table">
            <table>

            <thead>
                <th>member image</th>
                <th>member name</th>
                <th>member role</th>
                <th>action</th>
            </thead>

            <tbody>
                <?php

                $select_member = mysqli_query($conn, "SELECT * FROM `member`");
                if(mysqli_num_rows($select_member) > 0){
                    while($row = mysqli_fetch_assoc($select_member)){
                ?>

                <tr>
                    <td><img src="uploaded_img/<?php echo $row['image']; ?> "height="100" alt=""></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['role']; ?></td>
                    <td>
                        <a href="user.php?delete=<?php echo $row['id']; ?>" class="delete-btn" 
                         onclick = "return confirm('are your sure you want to delete this?');"> <i 
                         class="fas fa-trash"></i> delete </a>
                         
                    </td>
                    </tr>

                    
                <?php
                    };
                }else{
                    echo "<div class='empty'>no member added</div>";
                }
                
                ?>



    </div>

    <!-- Custom JS file link -->
    <script src="js/script.js"></script>

</body>
</html>
