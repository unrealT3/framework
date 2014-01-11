<?php

class SignupController extends PageController{

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->view->render('signup/index');
    }

    function run(){

    }
}