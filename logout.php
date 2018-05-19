<?php 
    session_start();
    unset($_SESSION['customer']);
    unset($_SESSION['driver']);
    header("Location: index.php");
?>