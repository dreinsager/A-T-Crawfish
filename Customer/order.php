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
<?php include 'custheader.php'?><br><br><br>

<div class="row justify-content-center">
<form action="orderfunction.php" method="POST">
<div class="container">
  <div class="row">
    <div class="col">
      <input type="text" name="fname" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" name="lname" class="form-control" placeholder="Last name">
    </div>
  </div>
</div><br>
<div class="container">
  <div class="row">
    <div class="col">
      <input type="text" name="phone" class="form-control" placeholder="Phone Number">
    </div>
    <div class="col">
      <input type="text" name="email" class="form-control" placeholder="Email">
    </div>
  </div><br>
<?php 
$result = $mysqli->query("SELECT * FROM item") or die($mysqli->error);
?>
<div class="container">
    <div class="row">
        <div class="col">
    <select name="item" multiple="10">
        <?php while ($row = mysqli_fetch_array($result)): ?>
        <option> <?php echo $row[1]; ?> $<?php echo $row[2]; ?> </option>
        <?php endwhile; ?>
    </select><br><br>
        </div>
        <div class="col">
            <input type="text" name="qty" class="form-control" placeholder="Enter Quantity">
        </div>
    </div>
</div>


<button type="submit" name="submit" class="btn btn-dark btn-lg btn-block">Submit</button><br>
</div>
</form>
</div>

</body>
</html>