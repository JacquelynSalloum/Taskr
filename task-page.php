<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>


  <meta charset="utf-8">
  <title>CSCI3172 - Lab 3</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="css/star-style.css">



  <link rel="icon" type="image/png" href="images/user.png">


</head>


<body>


  <div class="container">

        <?php
          include 'includes/header.inc.php';   
        ?>  
    
      <div class="row">

      <div class="twelve columns">
           <?php

            echo "<h2>". $_SESSION['task_title']."</h2>";

            ?>
       </div>
       </div>
   <div class="row">

        <div class="six columns">

       
            <?php
            echo "Description: " . $_SESSION['task_content'] . "<br>";
            echo "Category: " . $_SESSION['task_category'] . "<br>";
            echo "Status: " . $_SESSION['task_status'] . "<br>";

            echo "Date Posted: " . $_SESSION['task_date'] . "<br>" ;
            echo "Location: " . $_SESSION['task_location'] . "<br>" ;
            echo "Price: $" . $_SESSION['task_price'] . "<br><br>" ;

            echo "Rate this task:";
            include 'includes/rating-form.inc.php';
          ?> 

        </div> 
        <div class="six columns">
        <?php
          $taskImage =$_SESSION['task_image'];
          if ($taskImage == null){
            echo "<div style='width:300px;height:150px;overflow:hidden'><img src='./images/task-picture.png' style='height:150px'><br></div>";
        } else {
            echo "<div style='width:300px;height:150px;overflow:hidden'><img src='.$taskImage' style='height:150px'><br></div><br>";
        }
        ?>
        </div>

      </div>


      <div class="row">
      <div class="six columns">

      <h5> Contact </h5>

      <?php
          echo "Posters's name: ".$_SESSION['task_posterFirst']." ".$_SESSION['task_posterLast']. "<br>";
          echo "Posters's email: ".$_SESSION['task_poster']. "<br><br>";

        
              echo "User's Rating: ";
               include 'includes/rating-task.inc.php'; ?>
              <br><br>
              <?php
              if($_SESSION['task_status']=='open'){
              echo '<form id="claim_task" action ="claim_task.php" method="post">
              <input class="button-primary" type="submit" value="I can do this!">
              </form>';
              }
              else{
                echo '<h5>This task has already been claimed!</h5>';
              }
              ?>
            <a href="categories.php"><input type="button" value="Go back"></a>

        </div>
        <div class="six columns">
        <?php
        $taskPosterImage = $_SESSION['task_posterImage'];

        if ($taskPosterImage == null){
            echo "<div style='width:150px;height:150px;overflow:hidden'><img src='./images/profile-picture.jpg' style='height:150px'><br></div>";
        } else {
            echo "<div style='width:150px;height:150px;overflow:hidden'><img src='.$taskPosterImage' style='height:150px'><br></div><br>";
        }
        ?>
        </div>
        </div>
        </div>

      <?php 
        include 'includes/footer.inc.php';
      ?>


</body>
</html>