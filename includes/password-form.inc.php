<form id="confirm-password" action="confirm-password.php" method="post" onsubmit="return checkForm(this);">

  <div class="row">
    <div class="six columns">
      <label for="exampleEmailInput">Old Password</label>
      <input class="u-full-width" type="password" name="password" id="password">
    </div>
  </div>
  <div class="row">
    <div class="six columns">
      <label for="exampleEmailInput">New Password</label>
      <input class="u-full-width" type="password" placeholder="Must contain at least one number..." name="newPassword" id="newPassword">
    </div>
    <div class="six columns">
      <label for="exampleEmailInput">Confirm New password</label>
      <input class="u-full-width" type="password" placeholder="Confirm..." name="confirmPassword" id="confirmPassword">
    </div>
  </div><br>
  <input class="button-primary" type="submit" value="Change Password">
</form><br><br>
<form action ="profile-page.php">
  <input action = "profile-page.php" type="submit" value="Go Back">
</form>

<!--The following validator was taken from http://www.the-art-of-web.com/javascript/validate-password/ <script type="text/javascript">
//   function checkForm(form)
//   {
//       re = /[0-9]/;
//       if(!re.test(form.password.value)) {
//         alert("Error: password must contain at least one number (0-9)!");
//         form.password.focus();
//         return false;
//       }
//       re = /[a-z]/;
//       if(!re.test(form.password.value)) {
//         alert("Error: password must contain at least one lowercase letter (a-z)!");
//         form.password.focus();
//         return false;
//       }
//       re = /[A-Z]/;
//       if(!re.test(form.password.value)) {
//         alert("Error: password must contain at least one uppercase letter (A-Z)!");
//         form.password.focus();
//         return false;
//       }
//     } else {
//       alert("Error: Please check that you've entered and confirmed your password!");
//       form.password.focus();
//       return false;
//     }
//     return true;
//   }
// </script> -->