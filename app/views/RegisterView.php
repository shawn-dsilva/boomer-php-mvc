<?php require('includes/header.html'); ?>
<?php require('includes/navbar.php'); ?>
<div class="container">
  <div class="card">
<h1>REGISTER</h1>
<span>Already have an account? <a href="login">Login.</a></span>
    <div class="errorBox" id="errorBox"></div>
    <div class="successBox" id="successBox"></div>

    <form id="register" >
    <div class="input-container">
      <i class="fas fa-user input-icon"></i>
        <input type="text" name="username" id="username" placeholder="Enter your username">
      </div>
      <div class="input-container">
      <i class="fas fa-envelope input-icon"></i>
        <input type="text" name="email" id="email" placeholder="Enter your E-Mail">
      </div>
      <div class="input-container">
      <i class="fas fa-key input-icon"></i>
        <input type="password" name="password" id="password" placeholder="Enter your Password">
      </div>
      <div class="input-container">
        <button class="submit" type="submit"> Register <i class="far fa-arrow-alt-circle-right"></i></button>
      </div>
    </form>

  </div>
</div>
<script>ajaxSubmit('register')</script>
<?php require('includes/footer.html'); ?>
