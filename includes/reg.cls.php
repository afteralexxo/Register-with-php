<?php 
require 'dbh.cls.php';
class Register extends Dbh{
    private $name; private $mail; private $pass; private $conf;
    
    public function __construct($userName, $email, $password, $confirm)
    {
        $this->name = $userName;
        $this->mail = $email;
        $this->pass = $password;
        $this->conf = $confirm;
    }

    public function getUsrName(){
        $sql = 'Select * from customer where Username = "mika"';
        $result = $this->connect()->query($sql);
        $row = $result -> fetch_assoc();

        if(!$this->name){
            header('location:../index.php?error=emptyusername');
            exit();
        }
        else if(strtolower($row["Username"]) === strtolower($this->name)){
            header('location:../index.php?error=dupliacteName');
            exit();
        }
        else{
            return $this->name;
        }
    }
    public function getMail(){

    }
}