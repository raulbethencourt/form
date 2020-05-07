<?php

//Initialize session data
session_start();

//I check if form is send it
if (!empty($_POST)) {

    //Inputs filters
    $f_username = trim(filter_input(INPUT_POST, 'pseudo', FILTER_VALIDATE_REGEXP, [
        "options" => array("regexp" => '/[A-Za-z0-9]{1,32}/')
    ]));
    $f_email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_EMAIL));
    $f_password = filter_input(INPUT_POST, 'password', FILTER_VALIDATE_REGEXP, [
        "options" => array("regexp" => '/[A-Za-z0-9]{6,32}/')
    ]);

    //Check if user gives all information its given
    if ($f_username && $f_email && $f_password === $_POST['confirm-password']) {
        
        //Check if account already exists
        require '../model/manager.php';
        if(findUserBy($db,$f_email) == null){

            //Crypting the password and secret
            if (defined('PASSWORD_ARGON2ID')) {
                $secret = password_hash($f_email, PASSWORD_ARGON2I) . time();
                $h_password = password_hash($f_password, PASSWORD_ARGON2I);
            } else {
                $secret = password_hash($f_email, PASSWORD_DEFAULT) . time();
                $h_password = password_hash($f_password, PASSWORD_DEFAULT);
            }

            //Register user
            insertUser($db, $f_username, $f_email, $h_password, $secret);
            header("Location: ../view/index.php?register=true");

            //Errors messages
        } else header("Location: ../view/register.php?error=3");
    } else header("Location: ../view/register.php?error=1");
} else header("Location: ../view/register.php?error=0");

