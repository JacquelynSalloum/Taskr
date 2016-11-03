<?php

$userName = $_POST['userName'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];

try
{
	$pdo = new PDO('mysql:host=db.cs.dal.ca;dbname=syoung', 'syoung', 'B00727194');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');
}

catch(PDOException $e)
{
	$output = 'Unable to connect to the database server.'. $e->getMessage();
	include 'output.html.php';

	exit();
}

try{
	$stmt = $pdo->prepare("INSERT INTO user (userName, firstName, lastName, email, password) 
		VALUES (:userName, :firstName, :lastName, :email, :password)");
	$stmt->bindParam(':userName', $userName);
	$stmt->bindParam(':firstName', $firstName);
	$stmt->bindParam(':lastName', $lastName);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':password', $password);
	$stmt->execute();
	include 'includes/welcome.inc.php';
}
catch(PDOException $e)
{
	include 'includes/error.inc.php';
}

?>

