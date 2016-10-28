<form id="registration_form" action="registration_form.php" method="post" onsubmit="return checkForm(this);">
      <div class="row">
        <div class="six columns">
          <label for="exampleEmailInput">First name</label>
          <input class="u-full-width" type="text" placeholder="First name..." id="firstName">
        </div>
        <div class="six columns">
          <label for="exampleEmailInput">Last name</label>
          <input class="u-full-width" type="text" placeholder="Last name..." id="lastName">
        </div>
      </div>
        <div class="row">
        <div class="six columns">
          <label for="exampleEmailInput">Username</label>
          <input class="u-full-width" type="text" placeholder="Username..." id="userName">
        </div>
      </div>

        <div class="row">
        <div class="six columns">
          <label for="exampleEmailInput">Email</label>
          <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="email">
        </div>
      </div>
      <div class="row">
        <div class="six columns">
          <label for="exampleEmailInput">Password</label>
          <input class="u-full-width" type="password" placeholder="Must contain at least one number..." id="password">
        </div>
        <div class="six columns">
          <label for="exampleEmailInput">Confirm password</label>
          <input class="u-full-width" type="password" placeholder="Confirm..." id="confirmPassword">
        </div>
      </div>
      <input class="button-primary" type="submit" value="Register">
</form>

<!--The following validator was taken from http://www.the-art-of-web.com/javascript/validate-password/ -->
<script type="text/javascript">
  function checkForm(form)
  {
    if(form.userName.value == "") {
      alert("Error: userName cannot be blank!");
      form.userName.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.userName.value)) {
      alert("Error: userName must contain only letters, numbers and underscores!");
      form.userName.focus();
      return false;
    }

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

    alert("You entered a valid password: " + form.password.value);
    return true;
  }
</script>