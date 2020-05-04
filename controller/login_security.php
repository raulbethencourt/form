<?php
//Initialize session data
session_start();
require "../model/db.php";
$user = $result;
var_dump($user);

//If user logIn, I use filters to control de info
if (!empty($_POST)) {
    $f_email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_EMAIL));
    $f_password = filter_input(INPUT_POST, 'password', FILTER_VALIDATE_REGEXP, [
        "options" => array("regexp" => '/[A-Za-z0-9]{6,32}/')
    ]);
    //If user gives all information
    if ($f_email && $f_password) {
        //If user gives right information
        foreach ($user as $data) {
            if ($f_email === $data['email'] && $f_password === $data['password']) {
                $_SESSION['user'] = $data;
                //If user select to rest connected
                if (isset($_POST['remember'])) {
                    array_push($_SESSION['user'], 'yes');
                }
                header("Location: ../view/welcome.php");
            } else //All errors if something doesn't works
                header("Location: ../view/index.php?error=2");
        }
    } else
        header("Location: ../view/index.php?error=1");
} else
    header("Location: ../view/index.php?error=0");
