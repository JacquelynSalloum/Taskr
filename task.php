<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>CSCI3172 - Assignment</title>
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

          <div class="six columns" style="text-align:center">
            <h4> Title </h4>
            <img src="images/default-image.png" style="height:250px"><br>
          </div> 
          
          <div class="six columns"><br><br><br>
            <h5>Category</h5>
            <h5>Location</h5>
            <h5>Deadline</h5>
          </div> 

 

      </div>  

      <div class="row">
        <div class="twelve columns">
          <br>
            Description
            <textarea input class="u-full-width">
            </textarea>
        </div>  
      </div>  

 <div class="row">

          <div class="four columns">
            <img src="images/profile-picture.jpg" style="height:150px"><br>
          </div> 
          
          <div class="four columns" >
            Username<br><br>
            E-mail<br><br>
            Rating<br><br>
          </div> 

          <div class="four columns">
          </div> 

      </div>  

      <div class="row" style="text-align:center">

            <input class="button-primary" type="submit" value="I can do this!">
            <input class="button-primary" type="submit" value="Go back">
         
      </div>  

      </div>

        <?php
          include 'includes/footer.inc.php';
        ?>
</body>
</html>i