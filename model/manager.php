<?php
require "../model/db.php";

//Function to find if the user is inside the data base
function findUserBy($db, $email)
{
    try {
        $sql = $db->prepare("SELECT * FROM user WHERE email = :mail");
        $sql->execute(["mail" => $email]);
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    } catch (Exception $e) {
        return $e->getMessage();
        exit();
    }
}


//Function to insert user in data base
function insertUser($db, $username, $email, $password, $secret)
{
    try {
        $sql = "INSERT INTO user (username, email, password, secret)
                VALUES (:name, :mail, :pass, :sec)";

        $stmt = $db->prepare($sql);
        $stmt->execute(["name" => $username, "mail" => $email, "pass" => $password, "sec" => $secret]);
    } catch (Exception $e) {
        return $e->getMessage();
        exit();
    }
}
