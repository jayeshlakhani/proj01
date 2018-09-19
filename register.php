<!-- Header -->
<?php include_once('templates/header.php') ?>
<!--  -->

<title>Register</title>
<br>
<br>
<div class="wrapper">
  <div class="container">

    <form id="form_register" class="mx-auto" method="post" action="includes/user.php" onsubmit="return false">
      <label for="dander" id="reg_fail"></label>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" value="admin123">
        <span id="u_error"></span>
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email Address" value="test@mail.com">
        <span id="e_error"></span>
      </div>
      <div class="form-group">
        <label for="password_1">Password</label>
        <input type="password" name="password_1" class="form-control" id="password_1" placeholder="Password" value="1234567">
        <span id="p1_error"></span>
      </div>
      <div class="form-group">
        <label for="password_2">Conform Password</label>
        <input type="password" name="password_2" class="form-control" id="password_2" placeholder="Conform Password" value="1234567">
        <span id="p2_error"></span>
      </div> 
      <button type="submit" class="btn btn-primary" id="btn_reg"><i class="fa fa-user">&nbsp;&nbsp;</i>Submit</button>
      <span><a href="index.php">Log In</a></span>
    </form>
    <span id="result"></span>
  </div>
</div>

<!-- Footer -->
<?php include_once('templates/footer.php') ?>