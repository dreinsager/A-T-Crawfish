<?php require '../DB/connect.php' ?>
<?php
session_start();
    if (isset($_POST['submit'])){
        $product = $_POST['product'];
        $price = $_POST['price'];

        $_SESSION['message'] = "Information Successfully Added!";
        $_SESSION['msg_type'] = "success";

        $sql = "INSERT INTO item (product, price) VALUES (?, ?)";
        $stmt = mysqli_stmt_init($mysqli);
        if(empty($product) || empty($price)) {
            echo 'Please enter all fields!';
            header("Location: adminmenu.php?error=emptyfields");
            exit();
        }
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "ss", $product, $price);
            mysqli_stmt_execute($stmt);

            header("Location: adminmenu.php");
            exit();
            }
           
            
mysqli_stmt_close($stmt);
mysqli_close($mysqli);
}


    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM item WHERE id=$id") or die($mysqli->error());

        $_SESSION['message'] = "Information Successfully Deleted!";
        $_SESSION['msg_type'] = "danger";


        header("Location: adminmenu.php");
        exit();

    }