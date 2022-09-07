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
            header('location:../index.php?error=emptyUsername');
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
       if(!$this->mail){
        header('location:../index.php?error=emptyEmail');
        exit();
       }
       else if(!filter_var($this->mail, FILTER_VALIDATE_EMAIL)){
        header('location:../index.php?error=IncorrectEmail');
        exit();
       }
       else{
        return $this->mail;
       }
    }
}