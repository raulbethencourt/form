<?php
//I connect with my data base
if ($_SESSION) {
    $dsn = 'mysql:host=localhost;dbname=form';
    $username = 'johndifool';
    $password = 'johndifool';
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (Exception $e) {
        return $e->getMessage();
        exit();
    }
} else header("Location: ../view/index.php?error=0");
