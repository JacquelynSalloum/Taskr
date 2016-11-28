<?php
session_start();
?>

<?php
include_once 'login.php';
include 'db_connect.php';

$salt = '378570bd25c8efa9bfdcfb64f99e';
$password = hash_hmac('md5', $_POST['password'], $salt);
$email = $_SESSION['email'];
$newPassword = hash_hmac('md5', $_POST['newPassword'], $salt);


if($password == $_SESSION['password']){

	try{
		$sql = "UPDATE user SET password='$newPassword' WHERE email='$email'";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$_SESSION['password'] = $newPassword;
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