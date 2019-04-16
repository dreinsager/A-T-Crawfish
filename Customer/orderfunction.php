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



        ini_set("SMTP","aspmx.l.google.com");
        $message = "<html><body>";
        $message .= 'Name: ' . $_POST['fname'] . ' ' . $_POST['lname'] . "\r\n\r\n";
        $message .= "<br>";
        $message .= 'Phone: ' . $_POST['phone'] . "\r\n\r\n";
        $message .= "</body></html>";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
        $headers .= "From: a&tcrawfish@gmail.com" . "\r\n";
        mail("dreinsager@gmail.com","Order Placed",$message,$headers);

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
?>
<div class="alert alert-primary" role="alert">
<h1>Thank you for your Order!</h1>
</div>

<div class="row justify-content-center">
    <label>Name:&nbsp; <?php echo $fname?>&nbsp;<?php echo $lname; ?><br><br>
    <label>Phone Number:&nbsp; <?php echo $phone?><br><br>
    <label>E-Mail:&nbsp; <?php echo $email;?><br><br>
    <label>Item:&nbsp; <?php echo $item?><br><br>
    <label>Quantity:&nbsp; <?php echo $qty?><br><br>
    <a class="btn btn-primary" href="custindex.php" role="button">Return to Home Page</a>
</div>
<style>
    h1 {
        text-align: center;
    }
</style>
</body>
</html>

