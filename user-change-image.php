<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Taskr</title>
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
      <div class="twelve columns" style="margin-top:5%">
     

        <h5>Change Your Info</h5> 

          <?php
            include 'includes/update-image.inc.php';
          ?>
         <form action="profile-page.php">
          <input type="submit" value="Go Back">
        </form>
      </div>
    </div>

</div> 
<?php
  include 'includes/footer.inc.php';
?>
</body>
</html>