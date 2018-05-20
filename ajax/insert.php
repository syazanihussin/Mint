<?php
header('content-type: application/json; charset=utf-8');
include('../class/mysql_crud.php');
$db = new Database();
$db->connect();
$db->insert($_POST['table'],$_POST['column'],$_POST['inserting']);  // Table name, column names, datas

if($_POST['message'] == "") {
    $res = $db->getResult();  
    echo json_encode($res); //echo inserted id, return 1 data
}

else if($_POST['message'] == "signup") {
    session_start();
    $_SESSION['customer'][0]['username'] = $_POST['session'];
    $res = $_SESSION['customer'];  
    echo json_encode($res);
}

else if($_POST['message'] == "register") {
    session_start();
    $_SESSION['driver'][0]['username'] = $_POST['session'];
    $res = $_SESSION['driver']; 
    echo json_encode($res);
}
