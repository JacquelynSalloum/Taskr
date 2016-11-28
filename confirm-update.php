<?php
session_start();

include_once 'login.php';
include 'db_connect.php';


$salt = '378570bd25c8efa9bfdcfb64f99e';
$password = hash_hmac('md5', $_POST['password'], $salt);
$email = $_SESSION['email'];

$newFirst = $_POST['newFirst'];
$newLast = $_POST['newLast'];


if($password == $_SESSION['password']){

	try{

		$sql = "UPDATE user SET firstName='$newFirst' WHERE email='$email'";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$_SESSION['firstName'] = $newFirst;

		$sql = "UPDATE user SET lastName='$newLast' WHERE email='$email'";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$_SESSION['lastName'] = $newLast;

		include 'profile-success.php';

	}

	catch(PDOException $e){
		include 'includes/error.inc.php';
	}

}
else{
	include 'includes/error.inc.php';
}

?>