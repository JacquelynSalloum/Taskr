<form id="registration_form" action="confirm.php" method="post" onsubmit="return checkForm(this);">
      <div class="row">
        <div class="six columns">
          <label for="exampleEmailInput">Email</label>
          <input class="u-full-width" type="email" placeholder="test@mailbox.com" name="email" id="email">
        </div>
      </div>      

      <div class="row">
        <div class="six columns">
          <label for="exampleEmailInput">First name</label>
          <input class="u-full-width" type="text" placeholder="First name..." name="firstName" id="firstName">
        </div>
        <div class="six columns">
          <label for="exampleEmailInput">Last name</label>
          <input class="u-full-width" type="text" placeholder="Last name..." name="lastName"id="lastName">
        </div>
      </div>

<<<<<<< HEAD
      <div class="row">
        <div class="six columns">
          <label for="exampleEmailInput">Birthday</label>
          <input class="u-full-width" type="date" name="birthday" id="birthday">
        </div>
      </div>

=======
>>>>>>> Sarah
      <div class="row">
        <div class="six columns">
          <label for="exampleEmailInput">Password</label>
          <input class="u-full-width" type="password" placeholder="Must contain at least one number..." name="password" id="password">
        </div>
        <div class="six columns">
          <label for="exampleEmailInput">Confirm password</label>
          <input class="u-full-width" type="password" placeholder="Confirm..." name="confirmPassword" id="confirmPassword">
        </div>
      </div><br><br>
      <input class="button-primary" type="submit" value="Register">
</form>

<!--The following validator was taken from http://www.the-art-of-web.com/javascript/validate-password/ -->
<script type="text/javascript">
  function checkForm(form)
  {

    if(form.password.value != "" && form.password.value == form.confirmPassword.value) {
      if(form.password.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.password.focus();
        return false;
      }
      if(form.password.value == form.userName.value) {
        alert("Error: Password must be different from userName!");
        form.password.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.password.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.password.focus();
      return false;
    }
    return true;
  }
</script>