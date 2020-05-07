<?php

//I call needed files 
require '../controller/set_cookie.php';
require '../controller/errors.php';

//HTML
$title = 'Welcome';
include '../view/html/header.php';
?>

<div id="welcome">
    <!-- return if it's first connection or after that -->
    <?php getErrorsWelcome($_COOKIE, $_SESSION); ?>
    <br>
    <a href="../controller/logout.php" id="submit">Déconnexion</a>
</div>
<?php
//HTML
include '../view/html/footer.php';
?>