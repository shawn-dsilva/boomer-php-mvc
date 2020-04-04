<?php require('includes/header.html'); ?>
<?php require('includes/navbar.php'); ?>


<div class="post-container" id="onePost">
  <div class="post-content">
  <h1 id="title"><?php echo $data['post']['title']; ?></h1>
  <div class="subheading"><?php echo ("Written by "."<a href='users/'".$data['post']['username']."'>"
  .$data['post']['name']." (".$data['post']['username'].")"."</a>".
  " <br> Created on ".$data['post']['created_at']." "); ?><br></div>
  <p id="content"><?php echo $data['post']['content']; ?></p>
  <p><button onclick="javascript:openEditBox()">Edit</button></p>

  <h1>Comments</h1>
  <p style="text-align:center; margin: 3rem auto;">Any thoughts on this post? <a href="#addcomment">Add a Comment.</a> </p>
  <div id="commentList" class="comment-list">

</div>
  <form id="addcomment" class="addcomment">
  <input type="hidden" name="post_id" id="id" value="<?php echo $data['post']['id']; ?>"></input>
  <textarea name="content" id="content" rows="10" placeholder=" Add a Comment!"></textarea>
  <button type="submit" form="addcomment">Submit Comment <i class="fas fa-arrow-right"></i></button>
  </form>

  </div>
</div>
<script>ajaxSubmit('addcomment','<?php echo $data['post']['id']; ?>')
getCommentList('<?php echo $data['post']['id']; ?>');
</script>
<div id="editBox"></div>
<?php require('includes/footer.html'); ?>