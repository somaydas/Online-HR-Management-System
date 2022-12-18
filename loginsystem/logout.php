<?php

session_start();
if (!isset($_SESSION['username']) && $_SESSION['loggedin'] == false) {
    header("location:login.php");
} else {
    echo "Successfully logged out<br>";
    session_unset();
    session_destroy();
    header("location:login.php");
}
