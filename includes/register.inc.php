<?php

if($_POST['submit']){
    
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    require '../classes/val.cls.php';
    $obj = new Register($userName, $email, $password, $confirmPassword);
    echo $obj->getUsrName();
}