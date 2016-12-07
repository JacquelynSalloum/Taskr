<?php
/* Display task image*/
session_start();
include 'login.php';
include 'db_connect.php';
$taskID = $_SESSION['taskID'];

// connect to database and look for task with session taskID
try {
    $stmt = $pdo->prepare("SELECT image FROM task WHERE taskID = '$taskID'"); 
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->fetchAll();
    foreach($result as $row)
    {
    $taskImage = $row['image'];
    }
    if ($userImage == null){
        echo "<div style='width:360px;height:294px;overflow:hidden'><img src='./images/task-picture.png' style='height:294px'><br></div>";
    } else {
        echo "<div style='width:360px;height:294px;overflow:hidden'><img src='.$taskImage' style='height:294px'><br></div>";
    }
    
}
catch(PDOException $e) {
    include 'includes/error.inc.php';
}
$conn = null;
echo "</table>";
?>