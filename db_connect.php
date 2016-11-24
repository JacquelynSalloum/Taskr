<?php

try
{
	$pdo = new PDO("mysql:host=$db_hostname;dbname=$db_database", $db_username, $db_password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');
}

catch(PDOException $e)
{
	$output = 'Unable to connect to the database server.'. $e->getMessage();
	include 'output.html.php';

	exit();
}

?>