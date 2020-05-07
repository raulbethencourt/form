<?php
//Initialize session data
session_start();

//If user logIn, I use filters to control info
if (!empty($_POST)) {
    $f_email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_EMAIL));
    $f_password = filter_input(INPUT_POST, 'password', FILTER_VALIDATE_REGEXP, [
        "options" => array("regexp" => '/[A-Za-z0-9]{6,32}/')
    ]);

    //I check if user token is the same that session
    if ($_POST['token'] === $_SESSION['token']) {
        //Here I check if user has give infos
        if ($f_email && $f_password) {

            //Here I look for user in data base
            require "../model/manager.php";
            if ($user = findUserBy($db, $f_email, $f_password)) {

                //Verify if user password its correct
                if (password_verify($f_password, $user['password'])) {
                    $user['token'] = $_POST['token'];
                    $_SESSION['user'] = $user;
                    $_SESSION['connect'] = 1;

                    //If user select to rest connected
                    if ($_POST['remember']) {
                        $_SESSION['user']['remember'] = 'on';
                    }
                    header("Location: ../view/welcome.php");

                    //All errors if something doesn't works  
                } else header("Location: ../view/index.php?error=2");
            } else header("Location: ../view/index.php?error=2");
        } else header("Location: ../view/index.php?error=1");
    } else header("Location: ../view/index.php?error=0");
} else header("Location: ../view/index.php?error=0");

