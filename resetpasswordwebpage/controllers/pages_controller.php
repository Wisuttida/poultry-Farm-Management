<?php
    class PageController{
        public function resetPassword(){
            $email = $_GET['email'];
            require("views/pages/resetPasswordPage.php");
        }

        public function error(){
            require("views/pages/error.php");
        }

        public function update(){
            $email = $_GET['email'];
            $password = $_GET['password'];
            Users::update($email , $password);
            require("views/pages/success.php");
        }
    }
?>