<?php 
require 'val.cls.php';
class Register extends Validate{
   public function validator(){
    if($this->getUsrName() && $this->getMail() && $this->getPass() && $this->getConf()){
        $con = new mysqli('localhost','root', '', 'registerphp');
        if($con->connect_error){
            die('Connection failed'.$con->connect_error);
        }
        $sql = "INSERT INTO customer (Username, Email, Pass) VALUES (?, ?, ?)";
 
        if($stmt = mysqli_prepare($con, $sql)){
            mysqli_stmt_bind_param($stmt, "sss",$name, $email, $pass);
            $name = $this->getUsrName();
            $email = $this->getMail();
            $pass = $this->getPass();
            mysqli_stmt_execute($stmt);
            header('location: ../index.php?Successful=RecordInserted');
        } else{
            echo "ERROR: Could not prepare query: $sql. " . mysqli_error($con);
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
         
        // Close connection
        mysqli_close($con);
    }
   }
 }