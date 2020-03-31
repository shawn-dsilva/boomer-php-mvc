<?php require('includes/header.html'); ?>
<?php require('includes/navbar.php'); ?>

 <div class="card-dashboard">
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
  </div>

  <?php require('includes/footer.html'); ?>
