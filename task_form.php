<?php

$title = $_POST['title'];
$category = $_POST['category'];
$price = $_POST['price'];
$postalcode = $_POST['postalcode'];
$description = $_POST['description'];
$status = 'open';
$posterID = 'FrankGMeadows@rhyta.com';
$date = date("Y-m-d H:i:s");

if ((!empty($_POST['title'])) && (is_numeric($_POST['price'])) && (strlen($_POST['postalcode']) == 6) && (!empty($_POST['description'])))
{
    try
    {
        $pdo = new PDO('mysql:host=localhost;dbname=macdona5', 'macdona5', 'B00668638');
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
        $stmt = $pdo->prepare("INSERT INTO task (date, image, title, content, posterID, price, location, category, status) 
            VALUES (:date, :image, :title, :content, :posterID, :price, :location, :category, :status)");
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':image', $imagepath);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $description);
        $stmt->bindParam(':posterID', $posterID);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':location', $postalcode);
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':status', $status);
        $stmt->execute();
        include 'includes/posted.inc.php';
    }
    catch(PDOException $e)
    {
        include 'includes/error.inc.php';
    }
} else {
    
    include 'includes/error.inc.php';
}

?>