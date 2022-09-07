<?php 
require 'val.cls.php';
class Register extends Validate{
   public function validator(){
      echo 'user name: '.$this->getUsrName().'<br>'.'email: '.$this->getMail().'<br>'.$this->getPass().'<br>'.$this->getConf();;
   }
}