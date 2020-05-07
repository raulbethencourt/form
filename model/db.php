<?php
//I connect with my data base
$dsn = 'mysql:host=localhost;dbname=form';
$username = 'johndifool';
$password = 'johndifool';
try {
    $db = new PDO($dsn, $username, $password);
} catch (Exception $e) {
    return $e->getMessage();
    exit();
}
