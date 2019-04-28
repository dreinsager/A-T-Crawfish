<!DOCTYPE html>
<html>
<head>
    <?php require '../../DB/connect.php' ?>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<?php include 'custfooter.php'?>

<?php include 'custheader.php'?><br><br>
<?php
if (isset($_GET['error'])) {
            echo '<div class="row justify-content-center alert alert-danger" role="alert"';
            echo '<p>Please fill in all fields!</p>';
            echo '</div>';
        }
?>
<?php
if (isset($_GET['error2'])) {
    echo '<div class="row justify-content-center alert alert-danger" role="alert"';
            echo '<p>Please input a valid e-mail!</p>';
            echo '</div>';
        }
?>
<div class="container"><h1>Oder From</h1><br></div>
<div class="row justify-content-center">
<form action="orderfunction.php" method="POST">
<div class="container">
  <div class="row">
    <div class="col">
      <label>First Name:</label>
      <input type="text" name="fname" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <label>Last Name:</label>
      <input type="text" name="lname" class="form-control" placeholder="Last name">
    </div>
  </div>
</div><br>
<div class="container">
  <div class="row">
    <div class="col">
      <label>Phone Number:</label>
      <input type="text" name="phone" class="form-control" placeholder="(xxx)xxx-xxxx">
    </div>
    <div class="col">
      <label>Email:</label>
      <input type="text" name="email" class="form-control" placeholder="billybob@domain.com">
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
            <label>Enter Quantity:</label>
            <input type="text" name="qty" class="form-control" placeholder="Enter Quantity">
        </div>
    </div>
</div>
<button type="submit" name="submit" class="btn btn-dark btn-lg btn-block">Submit</button><br>
</div>
</form>
</div>
<style>
h1 {
    font-family: 'Abril Fatface', cursive;
    text-align: center;
}
</style>

</body>
</html>