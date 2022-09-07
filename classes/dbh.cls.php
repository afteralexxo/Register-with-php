<?php
class Dbh{
    protected function connect()
    {
        $con = new mysqli('localhost','root', '', 'registerphp');
        if($con->connect_error){
            die('Connection failed').$con->connect_error;
        }
        return $con;
    }
}
