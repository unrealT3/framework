<?php

//require core files

require 'FileLoader.php';

$libraryFiles = array("Router", "DirectionController", "PageController", "View");
$configFiles = array("Paths");

//load files
$fileLoader = new FileLoader();
$fileLoader->loadLibraryFiles($libraryFiles);
$fileLoader->loadConfigFiles($configFiles);

//handles where to go
$directionController = new DirectionController();

?>