<?php

$userName = $_POST['userName'];
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
	$sql = "SELECT * FROM user WHERE userName='$userName' and password='$password'";
	$result = $pdo->query($sql);
	$fetch = $result->fetchAll();
	$count = count($fetch);
	if($count == 1) {
		include 'includes/return.inc.php';
	}
	else {
		echo "Verification not complete. Your username and password are invalid. Please try again.";
	}
}
catch(PDOException $e)
{
	$output = 'Unable to retrieve password from the database server.'. $e->getMessage();
	include 'output.html.php';
	exit();
}

?>