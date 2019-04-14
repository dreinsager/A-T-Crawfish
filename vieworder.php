<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <?php require '../DB/connect.php' ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View Order</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<?php include 'adminheader.php'?>

<div class="row justify-content-center">
<?php 
$result = $mysqli->query("SELECT * FROM orders") or die($mysqli->error);
?>
    <?php 
    if (isset($_SESSION['message'])): ?>
<div class="container alert alert-<?=$_SESSION['msg_type']?>">
<?php 
    echo $_SESSION['message'];
    unset($_SESSION['message']);
?>
</div>
<?php endif ?>
<div class="row justify-content-center">

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Phone</th>
                <th>E-Mail</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Confirm</th>
            </tr>
        </thead>
    <?php
        while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['item']; ?></td>
            <td><?php echo $row['qty']; ?></td>
            <td>                 
                <button class = "btn btn-danger">Confirm</button>
                
            </td>

        </tr>
    <?php endwhile; ?>
    </table>
<div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>