<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<?php require '../DB/connect.php' ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add/Edit Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<?php include 'adminheader.php'?>
<?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo '<div class="alert alert-danger" role="alert">';
            echo '<p>Please fill in all fields!</p>';
            echo '</div>';

        }
    }
?>
<div class="container">
    <form action="menufunction.php" METHOD="POST">
            <div class="from-group">
                <label>Product:&nbsp;</label>
                <input type="text" class="from-control"  name="product" ><br><br>
                <label>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" class="from-control"  name="price" ><br><br>
                <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Submit</button><br>
            </div>
    </form>

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
                <th colspan="2">Edit/Delete</th>
            </tr>
        </thead>
    <?php
        while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['product']; ?></td>
            <td>$<?php echo $row['price']; ?></td>
            <td>
                <a href="adminmenu.php?edit=<?php echo $row['id'];?>"
                    class = "btn btn-info">Edit</a>
                <a href="menufunction.php?delete=<?php echo $row['id'];?>"
                    class = "btn btn-danger">Delete</a>

            </td>
        </tr>
    <?php endwhile; ?>
    </table>


</body>
</html>