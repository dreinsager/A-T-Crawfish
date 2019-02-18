<?php 
if (isset($_POST['login'])) {
    require '../DB/connect.php';

    $username = $_POST['uname'];
    $password = $_POST['pass'];

if(empty($username) || empty($password)) {
    header("Location: adminlogin.php?error=emptyfields");
    exit();
}
else {
    $sql = "SELECT * FROM admin WHERE uname=?;";
    $stmt = mysqli_stmt_init($mysqli);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: adminlogin.php?error=sqlerror");
        exit();
        }
    else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            //checks if password is correct and hashes.. if matches then success
            $checkpwd = password_verify($password, $row['pwd']);
            if ($checkpwd == false) {
                header("Location: adminlogin.php?error=invalidpwd");
                exit();
        
            }
            else if ($checkpwd == true) {
                session_start();
                $_SESSION['id'] = $row['id'];
                $_SESSION['uname'] = $row['uname'];

                header("Location: adminindex.php?login=succes");
                exit();

            }
            else {
                header("Location: adminlogin.php?error=invalidpwd");
                exit();

            }
        }

    else {
        header("Location: adminlogin.php?error=nouser");
        exit();
      
    }
}

}
}
else {
    header("Location: adminlogin.php");
    exit();
}


?>
