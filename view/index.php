<?php
session_start();

//Creates token  
$token = bin2hex(openssl_random_pseudo_bytes(24)) . time();
//Insert token in session
if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = $token;
} else $token = $_SESSION['token'];

if (isset($_SESSION['user']) && !hash_equals($_SESSION['token'], $_SESSION['user']['token'])) {
    header("Location: ../controller/logout.php");
    exit();
}

//Control if user it's already connected  ???
if (!empty($_COOKIE['utilisateur'])) {
    header("Location: ../view/welcome.php");
    exit();
}

//I call needed files 
require '../controller/errors.php';
$title = 'Login';
require '../view/html/header.php';
?>

<form action="../controller/login_security.php" method="POST">
    <!-- show errors to user -->
    <?php 
    if (!empty($_GET) && isset($_GET['error'])) {
        echo '<h4 style="text-align: center" class="alert alert-danger">' . $errors[$_GET['error']] . '</h4>';
    }
    if (!empty($_GET) && isset($_GET['register'])) {
        echo '<h4 style="text-align: center" class="alert alert-success">Vous êtes enregistré</h4>';
    }
    ?>
    <input type="hidden" name="token" value="<?= $token ?>">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <label for="remember"><input type="checkbox" name="remember"> Se souvenir de moi</label>
    <input type="submit" value="Submit" id="submit">
</form>

<?php
require '../view/html/footer.php';
?>