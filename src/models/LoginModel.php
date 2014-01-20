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

    function getUserData($email){
        $sth = $this->db->prepare("SELECT ID, userEmail, userFirst, userLast, userStartDate, userPhone FROM Users WHERE userEmail = :email ");
        $sth->execute(array(
            ':email' => $email
        ));

        $count = $sth->rowCount();

        if($count > 0){

            while($row = $sth->fetch(PDO::FETCH_ASSOC))
            {
                $results = $row;

            }

            return $results;
        }

    }
}