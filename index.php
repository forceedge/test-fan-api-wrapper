<?php

ini_set('display_errors', 1);
error_reporting(~0);

function getInstance() {
	require_once __DIR__ . '/Fandist.Api.Wrapper/Src/Core/Connector.php';

	$apiKey = 'c14nEtiH98g=';
	$apiSecret = 'fb6c93758c14c7aac1fc159190e6bf2b045e10d871ef2fd3a7b179e02fe8a8e81c0f105dd462a3bb905bfe711044df5036cdad67e750f476e31f2a54d53c2f33';

	return \Src\Core\Connector::getInstance($apiKey, $apiSecret);
}

if (isset($_GET['email'])) {
	$Connector = getInstance();
	$Connector->login($_GET['email']);
}

if (isset($_GET['logout'])) {
	$Connector = getInstance();
	$Connector->logout();
}

if (isset($_GET['loggedin'])) {
	echo 'LOGIN: You have been logged in into fandist<br /><br />';
}
else if (isset($_GET['loggedout'])) {
	echo 'LOGOUT: You have been logged out of fandist<br /><br />';
}

?>

<iframe src="http://check.fandi.st/display/test" height="300" width="100%"></iframe>

<form method="get" action="<?=$_SERVER['PHP_SELF'];?>">
	<input type="text" name="email">
	<input type="submit" value="login">
</form>
<br /><br />
<form method="get" action="<?=$_SERVER['PHP_SELF'];?>">
	<input type="submit" value="logout">
</form>