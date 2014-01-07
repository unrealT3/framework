<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 14/12/13
 * Time: 3:18 PM
 */

class View{

    public function render($name, $noInclude = false){

        if($noInclude == true){
            require 'views/' . $name . '.php';
        }
        else{
            require 'views/header.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';
        }




    }
} 