<!DOCTYPE html>
<html>
<head>
    <?php require '../../DB/connect.php' ?>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>

<?php include 'custheader.php'?><br>
<div class="container"><h1>Product Menu</h1><br></div>

<div class="row justify-content-center">

<?php 
$result = $mysqli->query("SELECT * FROM item") or die($mysqli->error);
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

<div class="container">
<div class="row justify-content-center">
    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
            </tr>
        </thead>
    <?php
        while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['product']; ?></td>
            <td>$<?php echo $row['price']; ?></td>
        </tr>
    <?php endwhile; ?>
    </table>
<div>
<?php include 'custfooter.php'?>
<style>
h1 {
    font-family: 'Abril Fatface', cursive;
    text-align: center;
}
</style>

</body>
</html>