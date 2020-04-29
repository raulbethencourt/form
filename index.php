<?php
$title = 'Login';
require 'html/header.php';
?>

<form action="data.php" method="post">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <input type="button" value="Submit" id="submit">
</form>

<?php
require 'html/footer.php';
?>