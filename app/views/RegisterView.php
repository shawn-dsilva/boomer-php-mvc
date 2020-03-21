<?php require('includes/header.html'); ?>
<?php require('includes/navbar.html'); ?>

<h1>REGISTER</h1>

<form id="register">
Name: <input type="text" name="name"><br>
E-Mail: <input type="text" name="email"><br>
Password: <input type="password" name="password"><br>
<input type="submit">
</form>
<div id="errorBox"></div>
<script>ajaxSubmit('register')</script>
<?php require('includes/footer.html'); ?>
