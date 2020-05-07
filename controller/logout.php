<?php
session_start();

if ($_SESSION) {

    //Unset cookie: setting cookie in the past and I show the path to it
    setcookie('connect', $_SESSION['user']['secret'], time() - 60, "/form/view");

    //Unset session
    unset($_SESSION['user']);

    //Redirect to login
    header("Location: ../view/index.php");
    
} else header("Location: ../view/index.php?error=0");
