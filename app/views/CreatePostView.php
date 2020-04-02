<?php require('includes/header.html'); ?>
<?php require('includes/navbar.php'); ?>

 <div class="createpost-container">
  <div class="createpost">

    <div class="createpost-content">
      <h1>Create New Post</h1>

      <form id="addpost">
      <input   type="text" id="title" name="title" placeholder="Title of your Post"><br>

      <textarea  name="content" id="content" rows="10" cols="30" placeholder="Content of your post"></textarea>
        <br><br>
      <button type="submit" form="addpost"><i class="far fa-save"></i> SUBMIT POST</button>
      </form>

      <div class="texted-container">
        <button onclick="javascript:selectText()" class="texted-symbols"><i class="fas fa-heading"></i></button>
        <button onclick="javascript:selectText()" class="texted-symbols"><i class="fas fa-bold"></i></button>
        <button onclick="javascript:selectText()" class="texted-symbols"><i class="fas fa-italic"></i></button>
        <button onclick="javascript:selectText()" class="texted-symbols"><i class="fas fa-underline"></i></button>
        <button onclick="javascript:selectText()" class="texted-symbols"><i class="fas fa-list"></i></button>
        <button onclick="javascript:selectText()" class="texted-symbols"><i class="fas fa-list-ol"></i></button>
        <button onclick="javascript:selectText()" class="texted-symbols"><i class="fas fa-quote-right"></i></button>
        <button onclick="javascript:selectText()" class="texted-symbols"><i class="fas fa-link"></i></button>

      </div>
      <script>document.onmouseup = document.onkeyup = document.onselectionchange = selectText();</script>

      <div id="errorBox"></div>
      </div>
    </div>
</div>

  <?php require('includes/footer.html'); ?>
