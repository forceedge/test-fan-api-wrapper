<?php

ini_set('display_errors', 1);
error_reporting(~0);

function getInstance() {
	require_once __DIR__ . '/Fandist.Api.Wrapper/Src/Core/Connector.php';

	$apiKey = 'YOUR-APP-KEY';
	$apiSecret = 'YOUR-APP-SECRET';

	return \Src\Core\Connector::getInstance($apiKey, $apiSecret, 'auth.fnd.st');
}

if (isset($_GET['email'])) {
	$Connector = getInstance();
	$Connector->login($_GET['email']);
}

if (isset($_GET['logout'])) {
	$Connector = getInstance();
	$Connector->logout();
}

require_once __DIR__ . '/template.php';

?>
