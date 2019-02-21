<?php

session_start();
session_unset();
session_destroy();
echo '<p>You have successfully logged out!<br><br>';
echo'<a href="adminlogin.php">Click Here</a> to return to Login page';
?>