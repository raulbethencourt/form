<?php
session_start();

//Check if we arrive from form
if (!isset($_SESSION['user']) && !isset($_COOKIE['connect'])) {
    header("Location: ../view/index.php");
    exit();
} else {
    //If user chose being remember, send cookie 
    if (isset($_SESSION['user']['remember'])) {
        setcookie('connect', $_SESSION['user']['secret'], time() + 60 * 60 * 24, ""); 
    }
}
