<?php

class SignupModel extends Model{

    function __construct(){
        parent::__construct();
    }

    function signupAttempt($email, $password, $firstName, $lastName, $phone){
        $sth = $this->db->prepare("SELECT * FROM Users WHERE userEmail = :email");
        $sth->execute(array(
            ':email' => $email
        ));

        $count = $sth->rowCount();


        date_default_timezone_set('America/Toronto');

        if($count == 0){
            $insertQuery = $this->db->prepare("INSERT INTO Users VALUES ('',:email,:password,:firstName, :lastName, :date, :phone)");
            $insertQuery->execute(array(
                ':email' => $email,
                ':password' => $password,
                ':firstName' => $firstName,
                ':lastName' => $lastName,
                ':phone' => $phone,
                ':date' => date('Y-m-d h:i:s')

            ));
            return true;
        }
        else{
            return false;
        }
    }


}