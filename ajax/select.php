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

else if($_POST['message'] == "searchRestaurant") {
    $db->select($_POST['table'], $_POST['column']); // Table name, Column Names
    $suppliers = $db->getResult();
    $restaurant = array();
    foreach($suppliers as $supplier) {
        similar_text($_POST['location'], $supplier['address'], $percent);

        if($percent > 50) {
            array_push($restaurant, $supplier['supplierName']);
        } 
    }
    
    if(count($restaurant) < 1) {
        array_push($restaurant, 'nothing');
    }
    session_start();
    $_SESSION['restaurant'] = $restaurant;
    $res = $_SESSION['restaurant'];  
    echo json_encode($res);
}

else if($_POST['message'] == "searchMenu") {
    $db->select($_POST['table'], $_POST['column'], NULL, $_POST['where'], 'menuID DESC'); // Table name, Column Names, WHERE conditions, ORDER BY conditions
    
    session_start();
    $_SESSION['menus'] = $db->getResult();
    $res = $_SESSION['menus'];  
    echo json_encode($res);
}

else if($_POST['message'] == "cuisine") {
    $db->select($_POST['table'], $_POST['column'], NULL, NULL, NULL, ' '); // Table name, Column Names, WHERE conditions, ORDER BY conditions
    
    session_start();
    $_SESSION['cuisines'] = $db->getResult();
    $res = $_SESSION['cuisines'];  
    echo json_encode($res);
}


else if($_POST['message'] == "checkout") {
    $db->select($_POST['table'], $_POST['column'], NULL, $_POST['where'], 'menuID DESC'); // Table name, Column Names, WHERE conditions, ORDER BY conditions
    
    session_start();
    $_SESSION['order'] = $db->getResult();
    $res = $_SESSION['order'];  
    echo json_encode($res);
}

else if($_POST['message'] == "delivery") {
    $db->select($_POST['table'], $_POST['column'], NULL, $_POST['where'], 'menuID DESC'); // Table name, Column Names, WHERE conditions, ORDER BY conditions
    
    session_start();
    $_SESSION['order'] = $db->getResult();
    $res = $_SESSION['order'];  
    echo json_encode($res);
}


