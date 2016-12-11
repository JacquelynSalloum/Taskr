<?php
session_start();

include_once 'login.php';
include 'db_connect.php';

$uploads_dir = "./images/users/";
$email = $_SESSION['email'];

if (!empty($_FILES["fileName"]["name"]) && !empty($_FILES["fileName"]["tmp_name"]))
{
    if (($_FILES["fileName"]["type"] == "image/gif") || ($_FILES["fileName"]["type"] == "image/jpeg")|| ($_FILES["fileName"]["type"] == "image/png" ))
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
		chmod($dir, 0755);
        $imagepath = "/images/users/" . $newFileName;

        try
        {
            $sql = "UPDATE user SET image='$imagepath' WHERE email='$email'";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            header('Location: ./profile-page.php');

        } catch(PDOException $e){
            include 'includes/error.inc.php';
        }

    } else {

        include 'includes/error.inc.php';

    }
} else {

    include 'includes/error.inc.php';
}

?>