<?php
$dsn = 'mysql:host=localhost;dbname=form';
$username = 'johndifool';
$password = 'Murcielago7-443';
try {
    $db = new PDO($dsn, $username, $password);
} catch (Exception $e) {
    return $e->getMessage();
}

try {
    $sql = $db->prepare("SELECT * FROM user");
    $sql->execute();
    $result = $sql->fetchAll();
} catch (Exception $e) {
    return $e->getMessage();
}
