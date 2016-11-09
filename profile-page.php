<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>CSCI3172 - Project</title>
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
          <div class="twelve columns" style="margin-top:5%">
            <hr>
          </div>   
      </div>

      <div class="row">

          <div class="four columns">
            <img src="images/profile-picture.jpg" style="height:150px"><br>
            <img src="images/add.png" style="height:20px"> Add photo <br><br>
          </div> 
          
          <div class="four columns" >
            Username<br><br>
            E-mail<br><br>
            <input class="button-primary" type="submit" value="Change Password">
          </div> 

          <div class="four columns">

          </div> 

      </div>  

      <div class="row">
        <div class="twelve columns">
          <br>
          Location
          <br><br>
        </div>  
      </div>  

      <div class="row">
        <div class="twelve columns">
          Payment Methods
        </div>  
      </div> 

      <div class="row">
        <div class="four columns" style="margin-top:5%; min-width:300px; float:r">
          <h5>Tasks</h5>
          <select input class="u-full-width">
            <option value="all-categories">All Categories</option>
            <option value="indoor">Active</option>
            <option value="outdoor">Complete</option>
          </select>
          <br>
        </div>
      </div>

      <div class="row">
        <div class="twelve columns">
          <?php
            include 'includes/card.inc.php';
          ?>
          <br>
        </div>
      </div>

      <div class="row">
        <div class="twelve columns">
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