<?php

class SignupController extends PageController{

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->view->render('signup/index');

    }

    function signupSubmit(){

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
            if($_POST['password'] == $_POST['confirmPassword']){

                //THE DATA IS VALID SO CREATE AND SEND TO MODEL
                parent::createModel("SignupModel");
                $inputEmail = $_POST['email'];
                $inputPassword = $_POST['password'];
                $inputFirstName = $_POST['firstName'];
                $inputLastName = $_POST['lastName'];
                $inputPhone = $_POST['phone'];
                if($this->model->signupAttempt($inputEmail, $inputPassword, $inputFirstName, $inputLastName, $inputPhone)){
                    header('Location: ../login');
                }
                else{
                    header('Location: ../signup');
                }




            }
            else{
                echo 'passwords are different';
            }
        }
        else{
            header('Location: ../signup');

        }
    }
}