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
    }

    function index(){
        $this->view->render('dashboard/index');
    }
}