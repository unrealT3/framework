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
    }

    function createModel($modelName){
        $fileLoader = new FileLoader();
        $fileLoader->loadModelFile($modelName);
        $this->model = new $modelName();
    }
} 