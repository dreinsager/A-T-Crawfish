<!DOCTYPE html>
<html>
<head>
    <?php require '../DB/connect.php' ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo '<p>Please fill in all fields!</p>';
        }
    }
?>
<div class="container">
  <div class="row justify-content-center">
    <div class="justyify-content-center">
    <img src="img/logo.jpg" width="300" height="300" class="d-inline-block align-top" alt="">

    <form action="loginfunction.php" method="post">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">Username:</span>
      </div>
      <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="uname">
    </div>    
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">Password:&nbsp;</span>
      </div>
      <input type="password" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="pass">
    </div>    
    <button type="submit" name="login" class="btn btn-primary btn-lg btn-block">Login</button>
        </form>
        <br>
    <form action="registeradmin.php" method="post">
        <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
    </form>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>