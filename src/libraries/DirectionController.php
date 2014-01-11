<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 14/12/13
 * Time: 1:32 PM
 */

class DirectionController {
    function __construct(){

        $url = $this->getUrl();
        $this->router = new Router();
        $this->processUrl($url);
    }

    /**
     * This function gets the url
     *
     * @return array
     */
    function getUrl(){
        $url = isset($_GET['url']) ? $_GET['url'] : 'home'; //if no url is set then set url to index for homepage
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        $url[0] .= "Controller"; // append controller to the end of the url controller inputted
        return $url;

    }




    /**
     * This function processes the url and instantiates the necessary controllers
     *
     * $params url - an array of urls inputs
     * @params user - the user object
     * @error calls error controller
     */

    function processUrl(array $url){

        if($this->router->doesRouteExist($url)){
            $currentController = new $url[0];
            $currentController->index();
        }
        else
        {
            //error controller file doesnt get required if the controller exists but method doesnt
            require_once 'controllers/ErrorController.php';

            $currentController = new ErrorController();
            $currentController->index();
        }

    }
} 