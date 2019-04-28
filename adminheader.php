<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="adminindex.php">
    <img src="img/logo.jpg" width="40" height="40" class="d-inline-block align-top" alt="">
    Administrator Access
  </a>
  <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="adminindex.php">Home</a>
  </li>
  <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="adminmenu.php">Add/Update Menu</a>
  </li>
  <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="vieworder.php">View Orders</a>
  </li>
  <ul class="nav justify-content-end">
  <li class="nav-item">
<form action="logout.php" method="post">
    <button type="submit" class="btn btn-primary btn-sm btn-block">Logout</button>
</form>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">
 
    </a>
  </li>
</nav>


 <?php 
    if (isset($_SESSION['id'])) {
        echo '<p>You are logged in!</p>';
    }
    else {
        header("Location: adminlogin.php");
        exit();

    }
    ?>















<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>