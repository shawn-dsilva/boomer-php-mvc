<?php require('includes/header.html'); ?>
<?php require('includes/navbar.php'); ?>


<div class="post-container" id="onePost">
  <div class="post-content">
  <h1 id="title"><?php echo $data['post']['title']; ?></h1>
  <p id="content"><?php echo $data['post']['content']; ?></p>
  <p><button onclick="javascript:openEditBox()">Edit</button></p>

  <h1>Comments</h1>
  <form id="addcomment">
  <input type="hidden" name="post_id" id="id" value="<?php echo $data['post']['id']; ?>"></input>
  <textarea name="content" id="content" rows="10" columns="30" placeholder="Add a Comment!"></textarea>
  <button type="submit" form="addcomment">Submit Comment</button>
  </form>
    <div id="commentList" class="comment-list">

    </div>
  </div>
</div>
<script>ajaxSubmit('addcomment')
getCommentList('<?php echo $data['post']['id']; ?>');
</script>
<div id="editBox"></div>
<?php require('includes/footer.html'); ?>