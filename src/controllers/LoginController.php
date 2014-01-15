<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 14/01/14
 * Time: 8:19 PM
 */

class LoginController extends PageController{

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->view->render('login/index');
    }

    function loginSubmit(){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            parent::createModel("LoginModel");
            $email = $_POST['email'];
            $password = $_POST['password'];


            if($this->model->loginAttempt($email, $password)){
                //make session
                //create user object
                //redirect to user dashboard
                header('Location: ../dashboard');
            }
            else{
                //user didnt exist
                header('Location: ../login');
            }

        }
        else{
            //invalid email
            header('Location: ../login');
        }
    }
}