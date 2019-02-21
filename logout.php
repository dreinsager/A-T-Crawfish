<?php

session_start();
session_unset();
session_destroy();
echo '<p>You have successfully logged out!';

// header("Location: adminlogin.php");
?>