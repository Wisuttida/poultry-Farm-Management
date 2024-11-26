<?php

class Users{
    public $id , $email , $pass;

    public function __construct($id , $email , $pass)
    {   
        $this->id = $id;
        $this->email = $email;
        $this->pass = $pass;
    }

    public static function update($email , $newPassword){
        require("connection_connect.php");
        $sql = "update users set pass = '$newPassword' where email = '$email'";
        $conn->query($sql);
        require("connection_close.php");
    }

}

