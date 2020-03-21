<?php require('includes/header.html'); ?>
<?php require('includes/navbar.html'); ?>
<div class="container">
  <div class="card">
<h1>LOGIN</h1>

    <form id="login" >
      <div class="input-container">
      <i class="fas fa-envelope input-icon"></i>
        <input type="text" name="email" id="email" placeholder="Enter your E-Mail">
      </div>
      <div class="input-container">
      <i class="fas fa-key input-icon"></i>
        <input type="password" name="password" id="password" placeholder="Enter your Password">
      </div>
      <div class="input-container">
        <button class="submit" type="submit"> Log In <i class="far fa-arrow-alt-circle-right"></i></button>
      </div>
    </form>
    <div id="errorBox"></div>
  </div>
</div>
<script>ajaxSubmit('login')</script>
<?php require('includes/footer.html'); ?>
