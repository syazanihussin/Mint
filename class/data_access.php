<?php
header('content-type: application/json; charset=utf-8');
include('mysql_crud.php');

class DataAccess {

    public function read($table, $column) {
        $db = new Database();
        $db->connect();
        $db->select($table, $column);
        $res = $db->getResult();
        return json_encode($res); 
    }


    public function update($table, $updating, $where) {
        $db = new Database();
        $db->connect();
        $db->update($table, $updating, $where); 
        $res = $db->getResult();
        return json_encode($res);
    }

    public function insert($table, $column, $inserting) {
        $db = new Database();
        $db->connect();
        $db->insert($table, $column, $inserting); 
        $res = $db->getResult();  
        return json_encode($res);
    }

    public function delete($table, $where) {
        $db = new Database();
        $db->connect();
        $db->delete($table, $where);  
        $res = $db->getResult();  
        return json_encode($res); 
    }

}
