<?php require('includes/header.html'); ?>

<h1>Welcome to Boomer MVC Dashboard</h1>
<?php
    echo "Welcome <b>{$data['name']}</b> ! <br>
    Your E-Mail is <b>{$data['email']}</b>   " ?>
<a href="javascript:logout()">Logout</a>
<script>
function logout() {
    document.cookie = "cookiename=sessionId ; expires = Thu, 01 Jan 1970 00:00:00 GMT"
}
</script>
<?php require('includes/footer.html'); ?>
