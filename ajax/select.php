<?php
header('content-type: application/json; charset=utf-8');
include('../class/mysql_crud.php');
$db = new Database();
$db->connect();

if($_POST['message'] == "") {
    $db->select($_POST['table'], $_POST['column']); // Table name, Column Names
    $res = $db->getResult();
    echo json_encode($res); //echo array of data, return data in array
}

else if($_POST['message'] == "login") {
    $db->select($_POST['table'], $_POST['column'], NULL, $_POST['where'], 'customerID DESC'); // Table name, Column Names, WHERE conditions, ORDER BY conditions
    session_start();
    $_SESSION['customer'] = $db->getResult();
    $res = $_SESSION['customer'];  
    echo json_encode($res);
}


