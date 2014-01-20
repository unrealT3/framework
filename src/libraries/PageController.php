<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 03/01/14
 * Time: 10:35 PM
 */

class PageController {

    function __construct(){
        $this->view = new View();
        $this->user = new User();
        
        $user['firstName'] = $this->user->getFirstName();
        $user['lastName'] = $this->user->getLastName();
        $user['email'] = $this->user->getEmail();
        $user['id'] = $this->user->getId();
        $user['phone'] = $this->user->getPhone();
        $user['startDate'] = $this->user->getStartDate();

        $this->view->user = $user;
    }

    function authenticate(){
        if(!$this->user->getId()){
            header('Location: home');
        }
    }

    function createModel($modelName){
        $fileLoader = new FileLoader();
        $fileLoader->loadModelFile($modelName);
        $this->model = new $modelName();
    }
} 