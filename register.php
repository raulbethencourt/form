<?php
$title = 'Register';
require 'html/header.php';
?>

<form action="db.php" method="post">
    <label for="pseudo" class="form-register">Username</label>
    <input type="text" name="pseudo" id="pseudo" class="form-register">
    <label for="email" class="form-register">Email</label>
    <input type="email" name="email" id="email" class="form-register">
    <label for="password" class="form-register">Password</label>
    <input type="password" name="password" id="password" class="form-register">
    <label for="confirm-password" class="form-register">Confirm password</label>
    <input type="password" name="confirm-password" id="confirm-password" class="form-register">
    <input type="button" value="Submit" id="submit">
</form>

<?php
require 'html/footer.php';
?>