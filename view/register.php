<?php
$title = 'Register';

//Control if user it's already connected
if (!empty($_COOKIE['utilisateur'])) {
    header("Location: ../view/welcome.php");
    exit();
}

$secret = "";

//I call needed files
require '../controller/errors.php';
require '../view/html/header.php';
?>

<form action="../controller/register_security.php" method="post">
    <!-- show errors to user -->
    <?php if (!empty($_GET) && $_GET['error'] !== false) {
        echo '<h4 style="text-align: center" class="alert alert-danger">'. $errors[$_GET['error']]. '</h4>';
    }?>
    <label for="pseudo" class="form-register-label">Username</label>
    <input type="text" name="pseudo" id="pseudo" class="form-register">
    <label for="email" class="form-register-label">Email</label>
    <input type="email" name="email" id="email" class="form-register">
    <label for="password" class="form-register-label">Password</label>
    <input type="password" name="password" id="password" class="form-register">
    <label for="confirm-password" class="form-register-label">Confirm password</label>
    <input type="password" name="confirm-password" id="confirm-password" class="form-register">
    <input type="submit" value="Submit" id="submit">
</form>

<?php
require '../view/html/footer.php';
?>