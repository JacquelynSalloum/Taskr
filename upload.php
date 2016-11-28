<?php

require_once('../includes/login.php');

/* Note: this code was retrieved from http://www.learncomputer.com/tutorial-uploading-files-in-php/, and modified for use in our application. */
echo "<table border=\"1\">";
echo "<tr><td>Client Filename: </td>
   <td>" . $_FILES["fileName"]["name"] . "</td></tr>";
echo "<tr><td>File Type: </td>
   <td>" . $_FILES["fileName"]["type"] . "</td></tr>";
echo "<tr><td>File Size: </td>
   <td>" . ($_FILES["fileName"]["size"] / 1024) . " Kb</td></tr>";
echo "<tr><td>Name of Temporary File: </td>
   <td>" . $_FILES["fileName"]["tmp_name"] . "</td></tr>";
echo "</table>";


if (($_FILES["fileName"]["type"] == "image/gif")
  || ($_FILES["fileName"]["type"] == "image/jpeg")
  || ($_FILES["fileName"]["type"] == "image/png" ))
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
        $temp = explode(".", $FILES["fileName"]["name"]);
        $newFileName = round(microtime(true)) . '.' . end ($temp);
		move_uploaded_file($_FILES["fileName"]["tmp_name"],
  		"../images/test/" . $newFileName);
    
      echo 'trying database connection';
    try
    {
        $pdo = new PDO("mysql:host=$db_hostname;dbname=$db_database", $db_username, $db_password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('SET NAMES "utf8"');

    }
    catch (PDOException $e)
    {
        $output = 'Unable to connect to the database server.' . $e->getMessage();
        include '../includes/output.html.php';
        exit();
    }

    $output = 'Database connection established.';
    include '../includes/output.html.php';
      
    $pathName = 'images/test/' . $newFileName;
    
    try {
        $stmt = $pdo->prepare("INSERT INTO pics (path) VALUES (:path)");
        $stmt->bindParam(':path', $pathName);
        $stmt->execute();
        $id = $pdo->lastInsertId();
        echo "Image added!";
        echo "image was stored at id " . $id;
    }
    catch (PDOException $e)
    {
        include '../includes/error.php';
        $output = 'Error inserting user info into table.' . $e->getMessage();
        include '../includes/output.html.php';
    }

  }
else
  {
  echo "Files must be either JPEG, GIF, or PNG";
  }





?>