<?php

class LoginModel extends Model{

    function __construct(){
        parent::__construct();
    }

    function loginAttempt($email, $password){
        $sth = $this->db->prepare("SELECT userEmail FROM Users WHERE userEmail = :email AND userPassword = :password");
        $sth->execute(array(
            ':email' => $email,
            ':password' => $password
        ));

        $count = $sth->rowCount();

        if($count > 0){
            return true;
        }
        else{
            return false;
        }
    }
}