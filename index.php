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
        include 'includes/header.inc.php';
      ?>  
      
      <div class="row">
        <div class="twelve columns" style="margin-top:5%; text-align:center">
          <h4>Get Stuff Done.</h4>
        </div>   
      </div>
      <div class="row">
        <div class="twelve columns" style="margin-top:5%; margin-left:42%; margin-right:4%">
            <?php 
                if($_SESSION['loggedin']==true){
                    echo '<a href="post-task.php"><input class="button-primary" type="button" value="Post a Task"></a>';
                }
                else{
                    echo '<a href="register.php"><input class="button-primary" type="button" value="Register"></a>';
                }
            ?>
            
        </div>   
      </div>

     <div class="row">
        <div class="twelve columns" style="margin-top:5%">
          <hr>
        </div>   
      </div>

      <div class="row">
        <div class="six columns" style="margin-top:5%">
        <a href="indoor-categories.php">
            <img src="images/house.jpeg" style="height:275px;width:100%;min-width:275px">
        </a>
        </div>
        <div class="six columns" style="margin-top:5%; min-width:300px">
          <h5>Indoor</h5>
          <p> Sometimes you just need a helping hand around the house. Whether it's cleaning, feeding pets, watering plants, moving furniture, packing, hanging pictures, or even doing laundry, you can find or offer your help here.</p>
        </div>
      </div>

      <div class="row">
        <div class="twelve columns" style="margin-top:5%">
          <hr>
        </div>   
      </div>

      <div class="row">
        <div class="six columns" style="margin-top:5%; min-width:300px">
          <h5>Outdoor</h5>
            <p> The gutters need cleaning. The car needs waxing. Land needs scaping! If you need this done, or can offer your services, look here.</p>
        </div>
        <div class="six columns" style="margin-top:5%">
            <a href="outdoor-categories.php">
                <img src="images/outdoor.png" style="height:275px;width:100%;min-width:275px">
            </a>
        </div>
      </div>

      <div class="row">
        <div class="twelve columns" style="margin-top:5%">
          <hr>
        </div>   
      </div>

      <div class="row">
        <div class="six columns" style="margin-top:5%">
            <a href="food-delivery-categories.php">
              <img src="images/groceries.jpeg" style="height:275px;width:100%;min-width:275px">
            </a>
        </div>  
        <div class="six columns" style="margin-top:5%; min-width:300px">
              <h5>Delivery/Food</h5>
              <p> If you need something to get from point A to point B, look here. Whether you need someone to grab you a burrito, or you need someone to deliver a grand piano, look here to find or provide delivery service.</p>
        </div>
      </div>

      <div class="row">
        <div class="twelve columns" style="margin-top:5%">
          <hr>
        </div>   
      </div>

      <div class="row">
        <div class="six columns" style="margin-top:5%; min-width:300px">
          <h5>Build/Repair</h5>
            <p> Are you horrible at building ready-to-assemble furniture? Got a knack for fixing stuff like bikes or computers? If you need help or can offer your talents, look no further.</p>
        </div>
        <div class="six columns" style="margin-top:5%; margin-bottom:5%">
            <a href="build-repair-categories.php">
                <img src="images/repair.jpeg" style="height:275px;width:100%;min-width:275px">
            </a>
        </div>
      </div>

</div> 
      <?php
        include 'includes/footer.inc.php';
      ?>
</body>
</html>
