<!DOCTYPE html>

<?php
if (isset($_GET['loggedin'])) {
    echo 'LOGIN: You have been logged in into fandist<br /><br />';
}
else if (isset($_GET['loggedout'])) {
    echo 'LOGOUT: You have been logged out of fandist<br /><br />';
}
?>

<iframe src="http://nigel.fnd.st/index.php/facebook/embed/http%3A%2F%2Frebirth%2Ftesting%2Ftest-Fan-Api-Wrapper%2Fstyle.css" height="300" width="100%"></iframe>

<form method="get" action="<?=$_SERVER['PHP_SELF'];?>">
    <input type="email" required="required" name="email">
    <input type="submit" value="login">
</form>
<br /><br />
<form method="get" action="<?=$_SERVER['PHP_SELF'];?>">
    <input type="submit" name="logout" value="logout">
</form>
