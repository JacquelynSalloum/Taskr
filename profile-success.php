<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>CSCI3172 - Lab 3</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/styles.css">



  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/user.png">

</head>

<body>

  <!-- Primary Page Layout
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">

        <?php
          include 'includes/header.inc.php';
        ?>  

      <div class="row">

          <div class="four columns">
          <?php include 'includes/retrieve-user-image.inc.php' ?><br>
            <a href="user-change-image.php"> <img  src="images/add.png" style="height:20px" alt="change"></a>&nbsp;Change photo <br><br>
            
            <?php
              echo "Your Rating: ";
              include 'includes/rating-test.inc.php';
              ?><br><br>
            <form action="delete-account.php">
              <input type="submit" value="Delete Account">
            </form>
            <!--<img src="images/profile-picture.jpg" style="height:150px"><br>-->
          </div> 

        
          <div class="eight columns" >
            <h5> Your account has been updated! </h5>

            <?php
            echo "First name: " . $_SESSION['firstName'] . "<br>";
            echo "Last name: " . $_SESSION['lastName'] . "<br>";
            echo "Email: " . $_SESSION['email'] . "<br><br>" ;
            ?>

            <a href="change_password.php"><input class="button-primary" type="button" value="Change Password"></a><br>
            <a href="update_info.php"><input class="button-primary" type="button" value="Update Profile"></a>


        <h5>Tasks</h5>
        <select input class="u-full-width" onchange="location=this.value;">
          <option value="#">Select One</option>
          <option value="profile-page-tasks.php">Your Tasks</option>
          <option value="profile-page-accepted-tasks.php">Current Tasks</option>
        </select>

          </div> 
      </div>  



      <div class="footer-push">
      <br></div>
      </div>

      <?php 
        include 'includes/footer.inc.php';
      ?>

</body>
</html>