<?php 
class Register{
    private $name; private $mail; private $pass; private $conf;
    /**
     * Class constructor.
     */
    public function __construct($userName, $email, $password, $confirm)
    {
        $this->name = $userName;
        $this->mail = $email;
        $this->pass = $password;
        $this->conf = $confirm;
    }

    function try(){
        echo $this->name;
    }
}