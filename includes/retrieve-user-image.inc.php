<?php
/* Display user image*/
session_start();
include 'login.php';
include 'db_connect.php';
$email = $_SESSION['email'];

try {
    $stmt = $pdo->prepare("SELECT image FROM user WHERE email = '$email'"); 
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->fetchAll();
    foreach($result as $row)
    {
    $userImage = $row['image'];
    }
    if ($userImage == null){
        echo "<div style='width:150px;height:150px;overflow:hidden'><img src='./images/profile-picture.jpg' style='height:150px'><br></div>";
    } else {
        echo "<div style='width:150px;height:150px;overflow:hidden'><img src='.$userImage' style='height:150px'><br></div>";
    }
    
}
catch(PDOException $e) {
    include 'includes/error.inc.php';
}
$conn = null;
echo "</table>";
?>