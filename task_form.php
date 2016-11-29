<?php
session_start();

require_once("login.php");

$uploads_dir = "./images/tasks/";
$title = $_POST['title'];
$category = $_POST['category'];
$price = $_POST['price'];
$postalcode = $_POST['postalcode'];
$description = $_POST['description'];
$status = 'open';
$posterID = $_SESSION['email'];
$date = date("Y-m-d H:i:s");

if (!empty($_FILES["fileName"]["name"]) && !empty($_FILES["fileName"]["tmp_name"]))
{
    /* Note: this image uploading code was retrieved from http://www.learncomputer.com/tutorial-uploading-files-in-php/,
    and modified for use in our application. */
    if (($_FILES["fileName"]["type"] == "image/gif") || 
        ($_FILES["fileName"]["type"] == "image/jpeg")|| 
        ($_FILES["fileName"]["type"] == "image/png" ))
    {
         switch ($_FILES['uploadFile'] ['error'])
          {  case 1:
                    print '<p> The file is bigger than this PHP installation allows</p>';
                    break;
             case 2:
                    print '<p> The file is bigger than this form allows</p>';
                    break;
             case 3:
                    print '<p> Only part of the file was uploaded</p>';
                    break;
             case 4:
                    print '<p> No file was uploaded</p>';
                    break;
          }
        $temp = explode(".", $_FILES["fileName"]["name"], 0);
        $newFileName = round(microtime(true)) . "_" . end($temp);
        $dir = $uploads_dir.$newFileName;
		move_uploaded_file($_FILES["fileName"]["tmp_name"], $dir);
        $imagepath = "/images/tasks/" . $newFileName;
        
        if ((!empty($_POST['title'])) && (is_numeric($_POST['price'])) && (strlen($_POST['postalcode']) == 6) && (!empty($_POST['description'])))
        {
            include 'db_connect.php';

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
    }
} else {
    
    if ((!empty($_POST['title'])) && (is_numeric($_POST['price'])) && (strlen($_POST['postalcode']) == 6) && (!empty($_POST['description'])))
    {
        include 'db_connect.php';

        try{
            $stmt = $pdo->prepare("INSERT INTO task (date, title, content, posterID, price, location, category, status) 
                VALUES (:date, :title, :content, :posterID, :price, :location, :category, :status)");
            $stmt->bindParam(':date', $date);
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
}

?>