<?php
    function do_login($username, $password){
        if($username != "admin" || $password != "12345"){
            header("location:index.php?error=wrong");
        }

        if($username == "admin" && $_POST ["password"] == "12345"){
            $_SESSION["username"] == $username;
            $_SESSION["password"] == $password;

            header("location:home.php");
        }
    }

    function check_login(){
        if(!isset($_SESSION["username"])){
            header("location:index.php");
        }
    }
?>