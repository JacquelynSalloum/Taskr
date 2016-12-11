<?php
session_start();

include_once 'login.php';
include 'db_connect.php';

$taskID = $_SESSION['taskID'];
$email = $_SESSION['email'];

	try{

		$sql = "UPDATE task SET status='active' WHERE taskID='$taskID'";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$_SESSION['task_status'] = 'active';

		$sql = "UPDATE task SET accepterID ='$email' WHERE taskID='$taskID'";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();

	include 'task-page.php';

	}

	catch(PDOException $e){
		include 'includes/error.inc.php';
	}

?>