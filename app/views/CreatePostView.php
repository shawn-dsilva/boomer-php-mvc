<?php require('includes/header.html'); ?>
<?php require('includes/navbar.php'); ?>

 <div class="createpost-container">
  <div class="createpost">

    <div class="createpost-content">
      <h1>Create New Post</h1>
      <div id="errorBox" class="errorBox"></div>

      <form id="addpost">
      <input   type="text" id="title" name="title" placeholder="Title of your Post" autocomplete="off"><br>


      <textarea  name="content" id="content" rows="10" cols="30" placeholder="Content of your post"></textarea>
        <br><br>
      <button type="submit" form="addpost"><i class="far fa-save"></i> SUBMIT POST</button>
      </form>


      <script>ajaxSubmit('addpost')</script>

      </div>
    </div>
</div>

  <?php require('includes/footer.html'); ?>
