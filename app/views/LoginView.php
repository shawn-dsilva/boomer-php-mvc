<?php require('includes/header.html'); ?>

<h1>LOGIN</h1>

<form id="login" >
E-Mail: <input type="text" name="email" id="email"><br>
Password: <input type="password" name="password" id="password"><br>
<input type="submit">
</form>
<div id="errorBox"></div>
<script>ajaxSubmit('login')</script>
<?php require('includes/footer.html'); ?>
