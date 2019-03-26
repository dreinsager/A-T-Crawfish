<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<?php require '../DB/connect.php' ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add/Edit Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

<?php  
  if (isset($_POST['newproduct'])){
        $newproduct = $_POST['newproduct'];
        $id = $_POST['id'];
        $mysqli->query("UPDATE item SET product='$newproduct' WHERE id='$id'") or die($mysqli->error);

    }
    if (isset($_POST['newprice'])){
        $newprice = $_POST['newprice'];
        $id = $_POST['id'];
        $mysqli->query("UPDATE item SET price='$newprice' WHERE id='$id'") or die($mysqli->error);

    }
?>
<div class="container">
    <form action="menufunction.php" METHOD="POST">
            <div class="form-group">
                <label>Product:&nbsp;</label>
                <input type="text" class="form-control"  name="product" ><br><br>
                <label>Price:</label>
                <input type="text" class="form-control"  name="price" ><br><br>
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
                <a href="edit.php?edit=<?php echo $row['id'];?>"
                    class = "btn btn-info">Edit</a>
                <a href="menufunction.php?delete=<?php echo $row['id'];?>"
                    class = "btn btn-danger">Delete</a>

            </td>
        </tr>
    <?php endwhile; ?>
    </table>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>