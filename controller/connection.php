<?php
session_start();

//Creates token  
$token = bin2hex(openssl_random_pseudo_bytes(24)) . time();
//Insert token in session
if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = $token;
} else $token = $_SESSION['token'];

//security
if (isset($_SESSION['user']) && !hash_equals($_SESSION['token'], $_SESSION['user']['token'])) {
    header("Location: ../controller/logout.php");
    exit();
}

//Control if user it's already connected
if (isset($_COOKIE['connect'])) {
    header("Location: ../view/welcome.php");
    exit();
}




