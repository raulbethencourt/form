<?php

if ($_SESSION) {
    
    // Errors 
    $errors = [
        "Tentative de piratage !",
        "Champs obligatoires manquants !",
        "Identifiants incorrects !",
        "Déjà enregistré"
    ];

    // check errors login
    function getErrorsLog($get, $errors)
    {
        if (!empty($get) && isset($get['error'])) {
            echo '<h4 style="text-align: center" class="alert alert-danger">' . $errors[$get['error']] . '</h4>';
        }
        if (!empty($get) && isset($get['register'])) {
            echo '<h4 style="text-align: center" class="alert alert-success">Vous êtes enregistré</h4>';
        }
    }

    //Check errors registering 
    function getErrorsRegister($get, $errors)
    {
        if (!empty($get) && $get['error'] !== false) {
            echo '<h4 style="text-align: center" class="alert alert-danger">'. $errors[$get['error']]. '</h4>';
        }
    }

    //Check errors Welcome
    function getErrorsWelcome($cookie, $session)
    {
        if (!empty($cookie['connect'])) {
            echo "<h2>Content de vous revoir !!</h2>";
        } else echo '<h2>Bienvenue ' . $session['user']['username'] . ' !!</h2>';
    }

} else header("Location: ../view/index.php?error=0");



