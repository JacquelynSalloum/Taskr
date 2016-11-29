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

<<<<<<< HEAD
     <div class="row">
        <div class="twelve columns" style="margin-top:5%">
          <hr>
        </div>   
      </div>
=======
>>>>>>> Sarah

      <div class="row">
        <div class="four columns" style="margin-top:5%; min-width:300px">
          <h5>Select a Category</h5>
          <select input class="u-full-width" onchange="location =this.value;">
            <option value="categories.php">All Categories</option>
            <option value="indoor-categories.php">Indoor</option>
            <option value="outdoor-categories.php">Outdoor</option>
            <option value="build-repair-categories.php">Build/Repair</option>
            <option value="food-delivery-categories.php">Food/Deliveries</option>
          </select>
        </div>
      </div>


      </script>

      <div class="row">
        <div class="twelve columns" style="margin-top:5%">

          <?php
            include 'includes/outdoor-card.inc.php';
          ?>

          <br>
        </div>   
      </div>
<<<<<<< HEAD

      </div>

=======
      <div class="footer-push">
      <br></div>
      </div>

      <?php 
        include 'includes/footer.inc.php';
      ?>

>>>>>>> Sarah
</body>
</html>