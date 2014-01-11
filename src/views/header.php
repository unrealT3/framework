<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL . 'public/css/general.css';?>" />
    <link href="<?php echo BASEURL . 'public/vendor/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">
</head>

<body>

<header>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <ul>
            <li><a href="<?php echo BASEURL . 'home';?>">Home</a></li>
            <li><a href="<?php echo BASEURL . 'help';?>">Help</a></li>
            <li><a href="<?php echo BASEURL . 'login';?>">Login</a></li>
        </ul>
        <div class="sign-in-container">
            <form class="form-horizontal sign-in-form">
                <label for="username">Username:</label>
                <input type="text" name="username" />
                <label for="password">Password:</label>
                <input type="password" name="password" />
                <input type="submit" value="sign in" class="btn btn-success">
            </form>
        </div>
    </nav>
</header>


<div class="content-container">





