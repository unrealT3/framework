<?php

//require core files

require_once 'FileLoader.php';
require_once 'libraries/PageController.php';
//require_once 'controllers/ErrorController.php';
require_once 'libraries/Router.php';

require_once 'libraries/DirectionController.php';
require_once 'libraries/View.php';
require_once 'libraries/Model.php';
//$libraryFiles = array("Router", "PageController", "DirectionController", "View", "Model");
$configFiles = array("Paths");

//load files
$fileLoader = new FileLoader();
//fileLoader->loadLibraryFiles($libraryFiles);
$fileLoader->loadConfigFiles($configFiles);

//handles where to go
$directionController = new DirectionController();

?>