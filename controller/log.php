<?php

//Control if user it's already connected
if (isset($_COOKIE['connect']) && !isset($_SESSION['connect'])) {
    
    //Variable 
    $secret = htmlspecialchars($_COOKIE['connect']);
    
    //I call data base
    require '../model/manager.php';
    if (checkSecretExist($db, $secret) == 1) {
        $userAccount = getSecret($db, $secret);
        $_SESSION['connect'] = 1;
        $_SESSION['email']   = $userAccount['email'];
    }
}