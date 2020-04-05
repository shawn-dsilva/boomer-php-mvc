<?php require('includes/header.html'); ?>
<?php require('includes/navbar.php'); ?>

 <div class="createpost-container">
  <div class="createpost">

    <div class="createpost-content">
      <h1>Editing this Post</h1>

      <form id="addpost">
      <input   type="text" id="title" name="title" value="<?php echo "{$data['post']['title']}" ?>"><br>


      <textarea  name="content" id="content" rows="10" cols="30" ><?php echo "{$data['post']['content']}" ?></textarea>
        <br><br>
      <button type="submit" form="addpost"><i class="far fa-save"></i> SAVE CHANGES</button>
      </form>


      <script>ajaxSubmit('addpost')</script>

      <div id="errorBox"></div>
      </div>
    </div>
</div>

  <?php require('includes/footer.html'); ?>
