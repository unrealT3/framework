<?php

//require core files

require 'FileLoader.php';

$libraryFiles = array("Router", "DirectionController", "PageController", "View");

//load files
$fileLoader = new FileLoader();
$fileLoader->loadLibraryFiles($libraryFiles);

//handles where to go
$directionController = new DirectionController();

?>