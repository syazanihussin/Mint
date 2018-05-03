<?php
header('content-type: application/json; charset=utf-8');
include('../class/mysql_crud.php');
$db = new Database();
$db->connect();
$db->update($_POST['table'], $_POST['updating'], $_POST['where']); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
echo json_encode($res); // echo num of row affected, return 1 data
