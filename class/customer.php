<?php
header('content-type: application/json; charset=utf-8');
include('data_access.php');

class Customer {

    public function authenticate($userName, $password) {
        $da = new DataAccess();
        $data = $da->read('user', 'userName, password');


    }


    public function setSession() {

    }

    public function getSession() {

    }
}
