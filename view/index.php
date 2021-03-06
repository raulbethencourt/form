<?php

//I call needed files 
require '../controller/connection.php';
require '../controller/errors.php';

//HTML
$title = 'Login';
include '../view/html/header.php';
?>

<form action="../controller/login_security.php" method="POST">
    <!-- show errors to user -->
    <?php getErrorsLog($_GET, $errors);  ?>
    <input type="hidden" name="token" value="<?= $token ?>">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <label for="remember"><input type="checkbox" name="remember"> Se souvenir de moi</label>
    <input type="submit" value="Submit" id="submit">
</form>

<?php
//HTML
include '../view/html/footer.php';
?>