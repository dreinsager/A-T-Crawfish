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
else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("Location: registeradmin.php?error=invaliduname");
    exit();

}
else if ($password !== $passrepeat) {
    header("Location: registeradmin.php?error=pwdcheck&uname=".$username);
    exit();

}
else {
    //Prepared statement for a more secure way to protect sql being put into the text fields
    $sql = "SELECT uname FROM admin WHERE uname=? ";
    $stmt = mysqli_stmt_init($mysqli);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: registeradmin.php?error=sqlerror");
        exit();
        }
    else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $checkresult = mysqli_stmt_num_rows($stmt);

        if ($checkresult > 0) {
            header("Location: registeradmin.php?error=useralreadyexists");
            exit();
            }
        else {
            //
            $sql = "INSERT INTO admin (uname, pwd) VALUES (?, ?)";
            $stmt = mysqli_stmt_init($mysqli);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: registeradmin.php?error=sqlerror");
                exit();
                }
            else {
                //Hashing the password using Bcrypt.. automatically updates
                $pwdhash = password_hash($password, PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($stmt, "ss", $username, $pwdhash);
                mysqli_stmt_execute($stmt);
                header("Location: registeradmin.php?signup=success");
                exit();

            }
        
        }
    }
}
mysqli_stmt_close($stmt);
mysqli_close($mysqli);
}
else {
    header("Location: registeradmin.php");
    exit();

}