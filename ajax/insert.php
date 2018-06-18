<?php
header('content-type: application/json; charset=utf-8');
include('../class/mysql_crud.php');
$db = new Database();
$db->connect();

if($_POST['message'] == "signup") {
    $db->insert($_POST['table'],$_POST['column'],$_POST['inserting']); 
    $res = $db->getResult();  
    echo json_encode($res);
}

else if($_POST['message'] == "register") {
    $db->insert($_POST['table'],$_POST['column'],$_POST['inserting']); 
    $res = $db->getResult(); 
    echo json_encode($res);
}

else if($_POST['message'] == "ordering") {
    $db->insert($_POST['table'],$_POST['column'],$_POST['inserting']); 
    $res = $db->getResult();  
    echo json_encode($res);
}

else if($_POST['message'] == "") {
    $db->insert($_POST['table'],$_POST['column'],$_POST['inserting']); 
    $res = $db->getResult();  
    echo json_encode($res); //echo inserted id, return 1 data
}