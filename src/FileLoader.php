<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 03/01/14
 * Time: 9:51 PM
 */


class FileLoader {
    private $controllerBasePath = 'controllers/';
    private $libraryBasePath = 'libraries/';
    private $configBasePath = 'config/';
    private $modelBasePath = 'models/';
    private $suffix = '.php';

    /**
     * This function loads the controller file if it exists
     * @param $fileName - The file to be loaded
     */
    function loadControllerFile($fileName){
        $controllerPath = $this->controllerBasePath . $fileName . $this->suffix;
        if(file_exists($controllerPath)){
            require $controllerPath;
        }
    }

    /**
     * This function loads the library files
     * @param array $fileNames = The files to be loaded
     */
    function loadLibraryFiles(array $fileNames){
        foreach($fileNames as $fileName){
            $libraryPath = $this->libraryBasePath . $fileName . $this->suffix;
            if(file_exists($libraryPath)){
                require $libraryPath;
            }
        }
    }

    /**
     * This function loads the config files
     * @param array $fileNames = The files to be loaded
     */
    function loadConfigFiles(array $fileNames){
        foreach($fileNames as $fileName){
            $configPath = $this->configBasePath . $fileName . $this->suffix;
            if(file_exists($configPath)){
                require $configPath;
            }
        }
    }

    /**
     * This function loads the model file
     * @param $fileName = The files to be loaded
     */
    function loadModelFile($fileName){
        $modelPath = $this->modelBasePath . $fileName . $this->suffix;
        if(file_exists($modelPath)){
            require $modelPath;
        }
    }

    /**
     * This function checks if the config, controller or library file exists
     * @param $fileName - Name of file without extension
     * @param $fileType - Type of file
     * @return boolean - Whether file exists or not
     */
    function checkFileExists($fileName, $fileType){
        switch($fileType)
        {
            case "library":
                if(file_exists($this->libraryBasePath . $fileName . $this->suffix)){
                    return true;
                }
                else
                {
                    return false;
                }
            case "config":
                if(file_exists($this->configBasePath . $fileName . $this->suffix)){
                    return true;
                }
                else
                {
                    return false;
                }
            case "controller":
                if(file_exists($this->controllerBasePath . $fileName . $this->suffix)){
                    return true;
                }
                else
                {
                    return false;
                }
            case "model":
                if(file_exists($this->modelBasePath . $fileName  . '_model' . $this->suffix)){
                    return true;

                }
                else
                {
                    return false;
                }
            default:
                echo 'that filetype is fucked';
        }
    }
} 