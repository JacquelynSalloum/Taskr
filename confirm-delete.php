<?php
session_start();

include_once 'login.php';
include 'db_connect.php';


$salt = '378570bd25c8efa9bfdcfb64f99e';

$password = hash_hmac('md5', $_POST['password'], $salt);

$email = $_SESSION['email'];

if($password == $_SESSION['password']){

	try{
		$sql = "DELETE FROM user WHERE email='$email'";

		$stmt = $pdo->prepare($sql);

		$stmt->execute();

		include 'index.php';

	}
	catch(PDOException $e){
		include 'includes/error.inc.php';
	}

}
else{

	include 'includes/error.inc.php';

}

?>