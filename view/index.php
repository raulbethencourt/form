<?php
$title = 'Login';

//Control if user it's already connected
if (!empty($_COOKIE['utilisateur'])) {
    header("Location: ../view/welcome.php");
}

//I call needed files 
require '../controller/errors.php';
require '../html/header.php';
?>

<form action="../controller/login_security.php" method="POST">
    <!-- show errors to user -->
    <?php if (!empty($_GET) && $_GET['error'] !== false) {
        echo '<h4 style="text-align: center" class="alert alert-danger">' . $errors[$_GET['error']] . '</h4>';
    }
    ?>
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <label for="remember"><input type="checkbox" name="remember"> Se souvenir de moi</label>
    <input type="submit" value="Submit" id="submit">
</form>

<?php
require '../html/footer.php';
?>