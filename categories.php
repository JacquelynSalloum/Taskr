<?php

session_start()

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
        <div class="four columns" style="margin-top:5%; min-width:300px">
            <h5>Select a Category</h5>
            <select input class="u-full-width" onchange="location =this.value;">
                <option value="">Select...</option>
              <option value="categories.php">All Categories</option>
              <option value="indoor-categories.php">Indoor</option>
              <option value="outdoor-categories.php">Outdoor</option>
              <option value="build-repair-categories.php">Build/Repair</option>
              <option value="food-delivery-categories.php">Food/Deliveries</option>
            </select>
        </div>
        <?php 
            if($_SESSION['loggedin']==true){
                echo '<div class="four columns" style="margin-top:5%; min-width:300px">';
                echo "<h5>Need something done?</h5>";
                echo '<a href="post-task.php"><input class="button-primary" type="button" value="Post a Task"></a>';
                echo '</div>';
            }
        ?> 
    </div>


  </script>

  <div class="row">
    <div class="twelve columns" style="margin-top:5%">
        
      <?php
      include 'includes/card.inc.php';
      ?>

      <br>
    </div>   
  </div>

</div>

<?php 
include 'includes/footer.inc.php';
?>

</body>
</html>
