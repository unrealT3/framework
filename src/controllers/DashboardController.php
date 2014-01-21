<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 03/01/14
 * Time: 10:50 PM
 */

class DashboardController extends PageController{

    function __construct(){
        parent::__construct();
        parent::authenticate();
    }

    function index(){
        $this->view->render('dashboard/index');
    }

    function profile(){
        $this->view->render('dashboard/profile');
    }

    function logout(){
        $this->view->render('dashboard/index');
        $session = new Session();
        $session->init();
        $session->destroy();
        header('Location: ../home');
    }
}