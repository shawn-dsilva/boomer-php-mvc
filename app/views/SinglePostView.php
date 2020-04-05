<?php require('includes/header.html'); ?>
<?php require('includes/navbar.php'); ?>

<?php
$control = false;
 if($data['user_data']) {
  $control = true;
 }
?>

<div class="post-container" id="onePost">
  <div class="post-content">
  <h1 id="title"><?php echo $data['post']['title']; ?></h1>
  <div class="subheading"><?php echo ("Written by "."<a href='users/'".$data['post']['username']."'><i class='fas fa-user'></i> "
  .$data['post']['name']." (".$data['post']['username'].")"."</a>".
  " <br> Created on ".$data['post']['created_at']." "); ?><br></div>
  <p id="content"><?php echo $data['post']['content']; ?></p>
  <?php echo ($control) ? "<p><button onclick='javascript:openEditBox()'>Edit</button></p>" : null ?>

  <h1>Comments</h1>

  <?php echo ($control) ? "<p style='text-align:center; margin: 3rem auto;'>Any thoughts on this post? <a href='#addcomment'>Add a Comment.</a> </p>" :
  "<p style='text-align:center; margin: 3rem auto;'>You need to <a href='/login'>Login</a> to Post a Comment</p>"; ?>

  <div id="commentList" class="comment-list">

</div>

<?php echo ($control) ? $addCommentForm : null ?>

<?php $addCommentForm = "<form id='addcomment' class='addcomment'>
  <h2>Add a Comment</h2>

  <input type='hidden' name='post_id' id='id' value='".$data['post']['id']."'></input>
  <textarea name='content' id='content' rows='10' placeholder=' Write your comment here'></textarea>
  <button type='submit' form='addcomment'>Submit Comment <i class='fas fa-arrow-right'></i></button>
  </form>
"?>

  </div>
</div>
<script>ajaxSubmit('addcomment','<?php echo $data['post']['id']; ?>')
getCommentList('<?php echo $data['post']['id']; ?>');
</script>
<div id="editBox"></div>
<?php require('includes/footer.html'); ?>