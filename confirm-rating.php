<?php
session_start();

include_once 'login.php';
include 'db_connect.php';


$taskID = $_SESSION['taskID'];
$email = $_SESSION['email'];
$rate = $_POST['rating'];
$posterID = $_SESSION['task_poster'];


if(isset($_POST['rating']) && !empty($_POST['rating'])){


		$stmt = $pdo->prepare("SELECT id FROM tbl_rating WHERE user_id = '$email' AND task_id = '$taskID'");
		$stmt->execute(array($email, $taskID));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if($stmt->rowCount()>=1){
		echo "You've already rated this task";
		include 'task-page.php';

		}

		else{
			$stmt = $pdo->prepare("INSERT INTO tbl_rating (rate, user_id, task_id, poster_id) 
				VALUES (:rate, :user_id, :task_id, :poster_id)");
			
			$stmt->bindParam(':rate', $rate);
			$stmt->bindParam(':user_id', $email);
			$stmt->bindParam(':task_id', $taskID);
			$stmt->bindParam(':poster_id', $posterID);
			$stmt->execute();
			include 'task-page.php';
				
		}


}


?>