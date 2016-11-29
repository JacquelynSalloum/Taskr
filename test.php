<?php
session_start();

$_SESSION['taskID']="2";
$_SESSION['posterID']='sarahedenyoung@gmail.com';

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
 <link rel="stylesheet" href="css/star-style.css">


  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/logo.png">


</head>

<body>



  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container">

    <?php
    include 'includes/header-logged.inc.php';
     ?>

      <div class="row">

        <div class="twelve columns">

          <?php
            include 'includes/rating-form.inc.php';
          ?>

        </div>

      </div>

</div> 
  <?php
    include 'includes/footer.inc.php';
  ?>
</body>
</html>