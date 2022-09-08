<?php 
require 'dbh.cls.php';
class Validate extends Dbh{
    private $name; private $mail; private $pass; private $conf;
    
    public function __construct($userName, $email, $password, $confirm)
    {
        $this->name = $userName;
        $this->mail = $email;
        $this->pass = $password;
        $this->conf = $confirm;
    }

    protected function getUsrName(){
        if(!$this->name){
            header('location:../index.php?error=emptyusername');
            exit();
        }
        else if(strlen($this->name) < 3){
                header('location:../index.php?error=lengthName');
                exit();
             }
        else{
            return $this->name;
            }
        }

    protected function getMail(){
        $sql = 'Select * from customer';
        $result = $this->connect()->query($sql);

        if(!$this->mail){
         header('location:../index.php?error=emptyEmail');
         exit();
        }
        else if(!filter_var($this->mail, FILTER_VALIDATE_EMAIL)){
         header('location:../index.php?error=IncorrectEmail');
         exit();
        }
        else{
            while($row = $result -> fetch_assoc()){
                if(strtolower($row['Email']) ==  strtolower($this->mail)){
                   header('location:../index.php?error=existingEmailAddress');
                   exit();
                }
         return $this->mail;
        }
     }
    }
     protected function getPass(){
        if(!$this->pass){
         header('location:../index.php?error=emptyPassword');
         exit();
        }
        else if(strlen($this->pass) < 8){
         header('location:../index.php?error=passwordLength');
         exit();
        }
        else{
         return $this->pass;
        }
     }
     protected function getConf(){
        if(!$this->conf){
         header('location:../index.php?error=emptyConfirmPassword');
         exit();
        }
        else if($this->conf != $this->pass){
         header('location:../index.php?error=passwordNotThesame');
         exit();
        }
        else{
         return $this->conf;
        }
     }
}