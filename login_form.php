<?php
include_once 'login.php';
include 'db_connect.php';

$email = $_POST['email'];
$salt = '378570bd25c8efa9bfdcfb64f99e';
$password = hash_hmac('md5', $_POST['password'], $salt);


try{

	$sql = "SELECT * FROM user WHERE email= ? and password= ?";
       
       $result = $pdo->prepare($sql);
       $result->execute(array($email, $password));
       $fetch = $result->fetchAll();
       $count = count($fetch);
      
       if($count == 1) {

		session_start();
		$_SESSION['loggedin'] = true;
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;

		$stmt = $pdo->prepare("SELECT firstName FROM user WHERE email = '$email'");
		$stmt->execute(array($email));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['firstName']=$row['firstName'];

		$stmt = $pdo->prepare("SELECT lastName FROM user WHERE email = '$email'");
		$stmt->execute(array($email));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['lastName']=$row['lastName'];

		$stmt = $pdo->prepare("SELECT AVG(rate) AS num FROM tbl_rating WHERE poster_id = '$email'");
		$stmt->execute(array($email));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['user-rating']=$row['num'];
		//echo $_SESSION['user-rating'];

		echo "<script>window.location.href='return.php';</script>";

		}

	else {

		echo "Verification not complete. Your username and password are invalid. Please try again.";
		include 'kill-session.php';
		
	}
}
catch(PDOException $e)
{
	$output = 'Unable to retrieve password from the database server.'. $e->getMessage();
	include 'output.html.php';
	include 'includes/error.inc.php';
	exit();
}

?>
