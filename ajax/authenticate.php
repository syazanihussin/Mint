<?php
header('content-type: application/json; charset=utf-8');
include('../class/mysql_crud.php');
$db = new Database();
$db->connect();
$db->select($_POST['table'], $_POST['column'], NULL, $_POST['where']);
session_start();
$session = $_SESSION['login'] = $res;
echo json_encode($session); 


