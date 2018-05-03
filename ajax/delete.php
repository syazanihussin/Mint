<?php
header('content-type: application/json; charset=utf-8');
include('../class/mysql_crud.php');
$db = new Database();
$db->connect();
$db->delete($_POST['table'],$_POST['where']);  // Table name, WHERE conditions
$res = $db->getResult();  
echo json_encode($res); //echo num of affected row, return 1 data