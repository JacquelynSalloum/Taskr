<?php

echo "Thank you for registering.";

try
{
	$pdo = new PDO('mysql:host=localhost;dbname=test_db', 'syoung', 'Sey0u0650993');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');
}

catch(PDOException $e)
{
	$output = 'Unable to connect to the database server.'. $e->getMessage();
	include 'output.html.php';

	exit();
}

$output = 'Database connection established.';
include 'output.html.php';

?>

