<?php
session_start();

<<<<<<< HEAD
require_once("login.php");
=======
include_once 'login.php';
>>>>>>> Sarah
include 'db_connect.php';

$email = $_SESSION['email'];

$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
$password = $_SESSION['password'];


try{
	$stmt = $pdo->prepare("INSERT INTO user (email, firstName, lastName, password) 
		VALUES (:email, :firstName, :lastName, :password)");
	
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':firstName', $firstName);
	$stmt->bindParam(':lastName', $lastName);
	$stmt->bindParam(':password', $password);
	$stmt->execute();

	$_SESSION['loggedin'] = true;

	include 'includes/welcome.inc.php';
	
}
catch(PDOException $e)
{

	include 'includes/error.inc.php';
	
}

?>
