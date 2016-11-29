<?php
<<<<<<< HEAD

=======
session_start();
>>>>>>> Sarah
if($_SESSION['loggedin'] == true){
	echo '<script>window.location.href="profile-page.php";</script>';

}
else{
	echo '<script>window.location.href="login-page.php";</script>';
}

?>
