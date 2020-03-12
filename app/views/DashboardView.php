<?php require('includes/header.html'); ?>

<h1>Welcome to Boomer MVC Dashboard</h1>
<?php
    echo "Welcome <b>{$data['user_data']['username']}</b> ! <br>
    Your E-Mail is <b>{$data['user_data']['email']}</b>   " ?>
<a href="javascript:logout()">Logout</a>

<h2>Create a Post<h2>
<form action="/addpost" method="post">
Title: <br>
<input type="text" name="title" placeholder="Title of your Post"><br>
Content: <br>
<textarea name="content" rows="10" cols="30" placeholder="Content of your post"></textarea>
  <br><br>
<input type="submit">
</form>
<h2>Your Posts</h2>

<div>
  <?php

if(empty($data['posts'])) {
    echo "Looks like you haven't written any posts";
  } else {
      foreach ($data['posts'] as $post) {
          echo "<h3>{$post['title']}</h3>
      <p>{$post['content']}</p>";
      }
  }?>

</div>

<?php require('includes/footer.html'); ?>
