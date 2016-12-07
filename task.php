<?php

session_start();
include_once 'login.php';
include 'db_connect.php';

$taskID = $_POST['taskID'];
try{

	$sql = "SELECT * FROM task WHERE taskID= '$taskID'";
       
       $result = $pdo->prepare($sql);
       $result->execute(array($taskID));
       $fetch = $result->fetchAll();
       $count = count($fetch);
      
       if($count == 1) {

		$stmt = $pdo->prepare("SELECT date FROM task WHERE taskID = '$taskID'");
		$stmt->execute(array($taskID));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['task_date']=$row['date'];

		$stmt = $pdo->prepare("SELECT image FROM task WHERE taskID = '$taskID'");
		$stmt->execute(array($taskID));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['task_image']=$row['image'];


		$stmt = $pdo->prepare("SELECT title FROM task WHERE taskID = '$taskID'");
		$stmt->execute(array($taskID));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['task_title']=$row['title'];

		$stmt = $pdo->prepare("SELECT posterID FROM task WHERE taskID = '$taskID'");
		$stmt->execute(array($taskID));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['task_poster']=$row['posterID'];

		$taskPoster = $_SESSION['task_poster'];

		$stmt = $pdo->prepare("SELECT price FROM task WHERE taskID = '$taskID'");
		$stmt->execute(array($taskID));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['task_price']=$row['price'];

		$stmt = $pdo->prepare("SELECT location FROM task WHERE taskID = '$taskID'");
		$stmt->execute(array($taskID));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['task_location']=$row['location'];

		$stmt = $pdo->prepare("SELECT category FROM task WHERE taskID = '$taskID'");
		$stmt->execute(array($taskID));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['task_category']=$row['category'];

		$stmt = $pdo->prepare("SELECT status FROM task WHERE taskID = '$taskID'");
		$stmt->execute(array($taskID));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['task_status']=$row['status'];

		$stmt = $pdo->prepare("SELECT content FROM task WHERE taskID = '$taskID'");
		$stmt->execute(array($taskID));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['task_content']=$row['content'];

		$stmt = $pdo->prepare("SELECT firstName FROM user WHERE email = '$taskPoster'");
		$stmt->execute(array($taskPoster));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['task_posterFirst']=$row['firstName'];

		$stmt = $pdo->prepare("SELECT lastName FROM user WHERE email = '$taskPoster'");
		$stmt->execute(array($taskPoster));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['task_posterLast']=$row['lastName'];


		    $stmt = $pdo->prepare("SELECT image FROM user WHERE email = '$taskPoster'"); 
		    $stmt->execute();
		    // set the resulting array to associative
		    $result = $stmt->fetchAll();
		    foreach($result as $row)
		    {
		    $_SESSION['task_posterImage'] = $row['image'];
		    }


		$stmt = $pdo->prepare("SELECT AVG(rate) AS num FROM tbl_rating WHERE poster_id = '$taskPoster'");
		$stmt->execute(array($taskPoster));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['task_user-rating']=$row['num'];

		include 'task-page.php';

		}

	else {

		echo "Task cannot be viewed";
		include 'categories.php';
		
	}
}
catch(PDOException $e)
{
	$output = 'Unable to retrieve task from the database server.'. $e->getMessage();
	include 'output.html.php';
	include 'includes/error.inc.php';
	exit();
}



// $sql = "SELECT * FROM task WHERE taskID = 1 ";
// $result = mysqli_query($db, $sql);
// $row = mysqli_fetch_assoc($result);
// $task_id = $row['taskID'];
// $task_date = $row['date'];
// $task_image = $row['image'];
// $task_title = $row['title'];
// $task_posterID =$row['posterID'] ;
// $task_accepterID =$row['accepterID'] ;
// $task_price  =$row['price'] ;
// $task_location =$row['location'] ;
// $task_category =$row['category'] ;
// $task_status =$row['status'] ;
// $task_content = $row['content'];


?>
