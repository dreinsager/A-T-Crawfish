<!DOCTYPE html>
<html>
<head>
    <?php require '../DB/connect.php' ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php 
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo '<p>Please fill in all fields!</p>';
        }
        else if ($_GET['error'] == "invaliduname") {
            echo '<p>Invalid Username entered!</p>';

        }
        else if ($_GET['error'] == "pwdcheck") {
            echo '<p>Passwords do not match!</p>';

        }
        else if ($_GET['error'] == "useralreadyexists") {
            echo '<p>User already exists!</p>';

        }
    }
    if (isset($_GET['signup'])){
        if ($_GET['signup'] == "success"){
            echo '<p>You have successfully registered!</p>';
 
        }
    }

?>
<form action="register.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="uname" placeholder="Enter Username"><br>
    <label for="password">Password:</label>
    <input type="text"  name="pass" placeholder="Passsword"><br>
    <label for="password">Confirm Password:</label>
    <input type="text"  name="cpass" placeholder=" Re-Enter Passsword"><br>
    <button type="submit" name="register">Register</button>
</form>


















<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>