<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 03/01/14
 * Time: 10:36 PM
 */

class ErrorController extends PageController{
    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->view->render('error/index');
    }

}