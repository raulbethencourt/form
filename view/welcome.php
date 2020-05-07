<?php
//Initialize session data
session_start();

//Check if we arrive from form
if (!isset($_SESSION['user'])) {
    header("Location: ../view/index.php");
    exit();
}

//If user chose being remember, send cookie 
if (isset($_SESSION['user']['remember'])) {
    setcookie('connect', $_SESSION['user']['secret'], time() + 60 * 60 * 24); 
}

$title = 'Welcome';
//I call needed files 
require '../view/html/header.php';
?>

<div id="welcome">
    <!-- return if it's first connection or after that -->
    <?php
    if (!empty($_COOKIE['utilisateur'])) {
        echo "<h2>Content de vous revoir " . $_COOKIE['utilisateur'] . ' !!</h2>';
    } else echo "<h2>Bienvenue " . $_SESSION['user']['username'] . ' !!</h2>';
    ?>
    <br>
    <a href="../controller/logout.php" id="submit">Déconnexion</a>
</div>
<?php
require '../view/html/footer.php';
?>