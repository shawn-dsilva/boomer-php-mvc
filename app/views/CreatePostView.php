<?php require('includes/header.html'); ?>
<?php require('includes/navbar.php'); ?>

 <div class="createpost-container">
  <div class="createpost">

    <div class="createpost-content">
      <h1>Create New Post</h1>

      <form id="addpost">
      <input type="text" id="title" name="title" placeholder="Title of your Post"><br>
      <div class="texted-container">
        <div class="texted-symbols"><i class="fas fa-heading"></i></div>
        <div class="texted-symbols"><i class="fas fa-bold"></i></div>
        <div class="texted-symbols"><i class="fas fa-italic"></i></div>
        <div class="texted-symbols"><i class="fas fa-underline"></i></div>
        <div class="texted-symbols"><i class="fas fa-list"></i></div>
        <div class="texted-symbols"><i class="fas fa-list-ol"></i></div>
        <div class="texted-symbols"><i class="fas fa-quote-right"></i></div>
        <div class="texted-symbols"><i class="fas fa-link"></i></div>

      </div>
      <textarea name="content" id="content" rows="10" cols="30" placeholder="Content of your post"></textarea>
        <br><br>
      <button type="submit" form="addpost"><i class="far fa-save"></i> SUBMIT POST</button>
      </form>
      <script>ajaxSubmit('addpost')</script>

      <div id="errorBox"></div>
      </div>
    </div>
</div>

  <?php require('includes/footer.html'); ?>
