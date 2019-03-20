<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<?php require '../DB/connect.php' ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<?php include 'adminheader.php'?>
<?php
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $result = $mysqli->query("SELECT * FROM item WHERE id='$id'");
        $row = $result->fetch_array();
    }
?>
<div class="container">
    <form action="adminmenu.php" METHOD="POST">
            <div class="form-group">
                <label>Product:&nbsp;</label>
                <input type="text" class="form-control"  name="newproduct" value="<?php echo $row['product']; ?>" ><br><br>
                <input type="hidden" class="form-control"  name="id" value="<?php echo $row[0]; ?>" ><br><br>

                <label>Price:</label>
                <input type="text" class="form-control"  name="newprice"value="<?php echo $row['price']; ?>" ><br><br>

                <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Update</button><br>
            </div>
    </form>

</body>
</html>