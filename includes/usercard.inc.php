<?php
session_start();
$email = $_SESSION['email'];
/* Card that displays all tasks in the build category */

echo "<table style='textalign:center'>";
echo "<tr><th>Title</th><th>Description</th><th>Price</th></tr>";

require_once('login.php');

try {
    $conn = new PDO("mysql:host=$db_hostname;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT title, content, price FROM task WHERE posterID = '$email'"); 
    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['content'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "</tr>";
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>