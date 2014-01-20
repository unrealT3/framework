<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 19/01/14
 * Time: 9:44 PM
 */

class User{
    private $id;
    private $email;
    private $firstName;
    private $lastName;
    private $startDate;
    private $phone;
    private $session;

    function __construct(){
        $this->session = new Session();
        $this->session->init();
        $this->id = $this->session->get('ID');
        $this->email = $this->session->get('userEmail');
        $this->firstName = $this->session->get('userFirst');
        $this->lastName = $this->session->get('userLast');
        $this->startDate = $this->session->get('userStartDate');
        $this->phone = $this->session->get('userPhone');
    }

    function getFirstName(){
        return $this->firstName;
    }

    function getLastName(){
        return $this->lastName;
    }
    function getEmail(){
        return $this->email;
    }
    function getId(){
        return $this->id;
    }
    function getStartDate(){
        return $this->startDate;
    }
    function getPhone(){
        return $this->phone;
    }
}