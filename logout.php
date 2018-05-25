<?php 
    session_start();
    unset($_SESSION['customer']);
    unset($_SESSION['driver']);
    unset($_SESSION['admin']);
    header("Location: index.php");
?>