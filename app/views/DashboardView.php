<?php require('includes/header.html'); ?>
<script>
function logout() {

    xhttp = new XMLHttpRequest();
    xhttp.open("GET","/logout", false);
    xhttp.send();

    document.cookie = "sessionId= ; expires = Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    window.location.href = "/login";
}
</script>
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
  die(var_dump($data['posts']));
  foreach($data['posts'] as $post) {
    echo "<h3>{$post['title']}</h3> <br>
      <p>{$post['content']}</p>";
  } ?>
</div>

<?php require('includes/footer.html'); ?>
