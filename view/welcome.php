<?php

//I call needed files 
require '../controller/log.php';
require '../controller/welcome_security.php';

//HTML
$title = 'Welcome';
include '../view/html/header.php';
?>

<div id="welcome">
    <!-- return if it's first connection or after that -->
    <?php
    if (!empty($_COOKIE['connect'])) {
        echo "<h2>Content de vous revoir !!</h2>";
    } else echo '<h2>Bienvenue ' . $_SESSION['user']['username'] . ' !!</h2>';
    ?>
    <br>
    <a href="../controller/logout.php" id="submit">Déconnexion</a>
</div>
<?php
//HTML
include '../view/html/footer.php';
?>