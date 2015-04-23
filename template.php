<!DOCTYPE html>

<?php
if (isset($_GET['loggedin'])) {
    echo 'LOGIN: You have been logged in into fandist<br /><br />';
}
else if (isset($_GET['loggedout'])) {
    echo 'LOGOUT: You have been logged out of fandist<br /><br />';
}
?>

<iframe src="http://nigel.fnd.st/facebook/embed/http://rebirth/testing/test-Fan-Api-Wrapper/style.css" height="300" width="100%"></iframe>

<form method="get" action="<?=$_SERVER['PHP_SELF'];?>">
    <input type="email" required="required" name="email">
    <input type="submit" value="login">
</form>
<br /><br />
<form method="get" action="<?=$_SERVER['PHP_SELF'];?>">
    <input type="submit" name="logout" value="logout">
</form>
