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
          include 'includes/header-logged.inc.php';
        ?>  

      <div class="row">

          <div class="four columns">
            <img src="images/profile-picture.jpg" style="height:150px"><br>
            <img src="images/add.png" style="height:20px"> Add photo <br><br>
          </div> 
          
          <div class="eight columns" >
            <?php
            echo "First name: " . $_SESSION['firstName'] . "<br>";
            echo "Last name: " . $_SESSION['lastName'] . "<br>";
            echo "Email: " . $_SESSION['email'] . "<br><br>" ;
            ?>
            <form action="change_password.php">
              <input type="submit" value="Change Password">
            </form>
            <form action="update_info.php">
              <input type="submit" value="Update Account">
            </form>
            <form action="delete-account.php">
              <input type="submit" value="Delete Account">
            </form>
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