<?php require('includes/header.html'); ?>
<?php require('includes/navbar.php'); ?>

 <div class="createpost-container">
  <div class="createpost">

    <div class="createpost-content">
      <h1>Editing this Post</h1>

      <form id="editpost">
      <input type='hidden' name='post_id' id='post_id' value="<?php echo "{$data['post']['id']}" ?>"></input>

      <input   type="text" id="title" name="title" value="<?php echo "{$data['post']['title']}" ?>" autocomplete="off"><br>


      <textarea  name="content" id="content" rows="10" cols="30" ><?php echo "{$data['post']['content']}" ?></textarea>
        <br><br>
      <button type="submit" form="editpost"><i class="far fa-save"></i> SAVE CHANGES</button>
      </form>


      <script>ajaxSubmit('editpost', <?php echo "{$data['post']['id']}" ?>)</script>

      <div id="errorBox"></div>
      </div>
    </div>
</div>

  <?php require('includes/footer.html'); ?>
