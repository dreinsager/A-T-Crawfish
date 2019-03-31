<?php require '../../DB/connect.php' ?>
<?php
    if (isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $qty = $_POST['qty'];


        $_SESSION['message'] = "Order Successfully Added!";
        $_SESSION['msg_type'] = "success";

        $sql = "INSERT INTO orders (fname, lname, phone, email, qty) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($mysqli);
        if(empty($fname) || empty($lname) || empty($phone) || empty($email) || empty($qty)) {
            echo 'Please enter all fields!';
            header("Location: order.php?error=emptyfields");
            exit();
        }
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $phone, $email, $qty);
            mysqli_stmt_execute($stmt);

            header("Location: order.php");
            exit();
            }
           
            
mysqli_stmt_close($stmt);
mysqli_close($mysqli);
}