<!-- Header -->
<?php include_once('templates/header.php') ?>
<!--  -->

<title>Register</title>
<br>
<br>
<div class="wrapper">
  <div class="container">
    <form id="form_register" class="mx-auto" method="post" action="database/connect.php">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email Address">
      </div>
      <div class="form-group">
        <label for="password_1">Password</label>
        <input type="password" name="password_1" class="form-control" id="password_1" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="password_2">Conform Password</label>
        <input type="password" name="password_2" class="form-control" id="password_2" placeholder="Conform Password">
      </div> 
      <button type="submit" class="btn btn-primary"><i class="fa fa-user">&nbsp;&nbsp;</i>Submit</button>
      <span><a href="index.php">Log In</a></span>
    </form>
  </div>
</div>

<!-- Footer -->
<?php include_once('templates/footer.php') ?>