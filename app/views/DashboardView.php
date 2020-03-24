<?php require('includes/header.html'); ?>
<?php require('includes/navbar.html'); ?>

<div class="container-main">
  <div class="card-dashboard">
    <h1>Boomer MVC Dashboard</h1>
    <?php
        echo "<p>Welcome  to the Boomer PHP MVC Dashboard, <b>{$data['user_data']['username']}</b> ! From here, you can customize your public profile, view your latest blog posts, edit blog posts or delete them, and also create new blog posts.</p>
        <p>You can also comment on other registered user's blog posts, comments have full CRUD functionality, just like Blog Posts and User Profile</p> " ?>

    <a href="javascript:logout()">Logout</a>
  </div>

  <!-- <div class="card-dashboard">
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
  </div> -->

  <!-- <div class="card-latest-posts">
    <h2>Your Posts</h2>
    <script>getPostList();</script>

    <div id="postList">
    </div> -->

    <div class="dashboard-container">
      <div class="dashboard-linkcard">
        <h2>User Profile</h2>
        <p>View and Edit your Public Profile</p>
        <button>View your Profile</button>
      </div>
      <div class="dashboard-linkcard">
        <h2>Your Blog Posts</h2>
        <p>View, Edit and Delete your Blog posts from a list</p>
        <button>View Blog Posts</button>

      </div>
      <div class="dashboard-linkcard">
        <h2>Create a Blog Post</h2>
        <p>Write a New Blog Post</p>
        <button>Create New Post</button>
      </div>
    </div>
  </div>

</div>
<?php require('includes/footer.html'); ?>
