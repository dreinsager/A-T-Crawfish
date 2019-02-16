<?php
if (isset($_POST['register'])) {
    require '../DB/connect.php';

    $username = $_POST['uname'];
    $password = $_POST['pass'];
    $passrepeat = $_POST['cpass'];

//Check if any fields are empty and returns to registeradmin.php
if (empty($username) || empty($password) || empty($passrepeat)) {
    header("Location: registeradmin.php?error=emptyfields&uname=".$username."&pass=".$password);
    exit();

}
    }