<?php
header('content-type: application/json; charset=utf-8');
include('../class/mysql_crud.php');
$db = new Database();
$db->connect();
$db->select($_POST['table'], $_POST['column']); // Table name, Column Names, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
echo json_encode($res); //echo array of data, return data in array


