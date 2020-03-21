<?php require('includes/header.html'); ?>
<?php require('includes/navbar.html'); ?>
<div class="container">
  <div class="card">
<h1>LOGIN</h1>

    <form id="login" >
    <input type="text" name="email" id="email" placeholder="Enter your E-Mail">
    <input type="password" name="password" id="password" placeholder="Enter your Password"><br>
    <input type="submit">
    </form>
    <div id="errorBox"></div>
  </div>
</div>
<script>ajaxSubmit('login')</script>
<?php require('includes/footer.html'); ?>
