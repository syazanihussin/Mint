<?php
header('content-type: application/json; charset=utf-8');
include('../class/mysql_crud.php');
$db = new Database();
$db->connect();

if($_POST['message'] == "request_accepted") {
    $db->update('orders', 'staffID='.$_POST['staffID'].'', 'orderID='.$_POST['orderID'].'');
    $db->update('delivery_person', 'clientID='.$_POST['orderID'].'', 'staffID='.$_POST['staffID'].'');
    header("Location: ../ondelivery.php");
}

else if($_POST['message'] == "paid") {
    $db->update($_POST['table'], $_POST['updating'], $_POST['where']);
    $res = $db->getResult(); 
    echo json_encode($res);
}
