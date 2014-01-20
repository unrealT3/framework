<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL . 'public/css/general.css';?>" />
    <link href="<?php echo BASEURL . 'public/vendor/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">
</head>

<body>

<?php
$user = $this->user;
$userLoggedIn = false;
if($user['id']){$userLoggedIn = true;};
?>

<header>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <ul>
            <li><a href="<?php echo BASEURL . 'home';?>">Home</a></li>
            <li><a href="<?php echo BASEURL . 'help';?>">Help</a></li>

            <?php if($user['id']){?>
                <li><a href="<?php echo BASEURL . 'dashboard';?>">Dashboard</a></li>
            <?php }
            else { ?>
                <li><a href="<?php echo BASEURL . 'signup';?>">Sign Up</a></li>
            <?php } ?>


        </ul>
        <?php if(!$userLoggedIn){ ?>
            <div class="sign-in-container">
                <form class="form-horizontal sign-in-form" action="<?php echo BASEURL . 'login/loginSubmit'; ?>" method="post">
                    <label for="email">Email</label>
                    <input type="text" name="email" required />
                    <label for="password">Password</label>
                    <input type="password" name="password" required />
                    <label></label><input type="submit" class="btn btn-success"name="submit"  value="Login" />
                </form>
            </div>
        <?php } else{ ?>
            <a href="dashboard/logout" class="btn btn-danger logout-button">Logout</a>
        <?php } ?>

    </nav>
</header>


<div class="content-container">





