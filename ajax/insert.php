<?php
header('content-type: application/json; charset=utf-8');
include('../class/mysql_crud.php');
$db = new Database();
$db->connect();
$db->insert($_POST['table'],$_POST['column'],$_POST['inserting']);  // Table name, column names, datas
$res = $db->getResult();  
echo json_encode($res); //echo inserted id, return 1 data