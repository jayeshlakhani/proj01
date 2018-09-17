<!-- Header -->
<?php include_once('templates/header.php') ?>
<!--  -->

<title>Welcome</title>
<br>
<br>
<div class="wrapper">
  <div class="container">
    <form id="form_login" class="mx-auto">
      <div class="form-group text-center">
      <img class="" src="images/login.png" width="71%" height="auto" alt="Log In">
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary"><i class="fa fa-user">&nbsp;&nbsp;</i>Submit</button>
      <span><a href="register.php">Register</a></span>
    </form>
  </div>
</div>

<!-- Footer -->
<?php include_once('templates/footer.php') ?>
<!--  -->