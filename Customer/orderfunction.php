<!DOCTYPE html>
<html>
<head>
    <?php require '../../DB/connect.php' ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<?php
    if (isset($_POST['submit'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $qty = $_POST['qty'];
        $item = $_POST['item'];

        echo '<input type="hidden" name="fname" value="<?php echo $fname; ?>" />';


        $_SESSION['message'] = "Order Successfully Added!";
        $_SESSION['msg_type'] = "success";

        $sql = "INSERT INTO orders (fname, lname, phone, email, qty, item) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($mysqli);
        if(empty($fname) || empty($lname) || empty($phone) || empty($email) || empty($qty) || empty($item)) {
            echo 'Please enter all fields!';
            header("Location: order.php?error=emptyfields");
            exit();
        }
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssssss", $fname, $lname, $phone, $email, $qty, $item);
            mysqli_stmt_execute($stmt);          
            }
               
            
              
mysqli_stmt_close($stmt);
mysqli_close($mysqli);
}
?><br>
<h1>Thank you for your Order</h1>


</body>
</html>

