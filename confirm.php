<?php
session_start();

		$_SESSION['email'] = $_POST['email'];
		$_SESSION['firstName'] = $_POST['firstName'];
		$_SESSION['lastName'] = $_POST['lastName'];
		$salt = '378570bd25c8efa9bfdcfb64f99e';
		$_SESSION['password'] = hash_hmac('md5', $_POST['password'], $salt);
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
        include 'includes/header.inc.php';
      ?>  

      <div class="row">
      	<div class="twelve columns">
      		<hr>
      	</div>
      </div>

      <div class="row">
        <div class="twelve columns" style="margin-top:5%; text-align:center">

         <h5> Is the following information correct? </h5>

		<h6> <?php echo "Email: " . $_SESSION['email']. "<br>"; ?> </h6>         
		<h6> <?php echo "First Name: " . $_SESSION['firstName']. "<br>"; ?> </h6>         
		<h6> <?php echo "Last Name: " . $_SESSION['lastName']. "<br>"; ?> </h6>     

        <form method="POST" action="registration_form.php">
		      <input type="submit" value="Confirm">
        </form>
        <form method="POST" action="register.php">
		      <input type="submit" value="Edit">
        </form>
		      <br><br>
    


        </div>   
      </div>

</div> 

</body>
</html>
