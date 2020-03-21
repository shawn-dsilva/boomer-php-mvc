<?php require('includes/header.html'); ?>
<?php require('includes/navbar.html'); ?>


<h1>Welcome to Boomer MVC Dashboard</h1>
<?php
    echo "Welcome <b>{$data['user_data']['username']}</b> ! <br>
    Your E-Mail is <b>{$data['user_data']['email']}</b>   " ?>
<a href="javascript:logout()">Logout</a>

<h2>Create a Post<h2>

<form id="addpost">
Title: <br>
<input type="text" id="title" name="title" placeholder="Title of your Post"><br>
Content: <br>
<textarea name="content" id="content" rows="10" cols="30" placeholder="Content of your post"></textarea>
  <br><br>
<input type="submit">
</form>
<script>ajaxSubmit('addpost')</script>

<div id="errorBox"></div>

<h2>Your Posts</h2>
<script>getPostList();</script>

<div id="postList">
</div>

<?php require('includes/footer.html'); ?>
