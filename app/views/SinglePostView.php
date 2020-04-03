<?php require('includes/header.html'); ?>
<?php require('includes/navbar.php'); ?>


<div class="post-container" id="onePost">
  <div class="post-content">
  <span hidden id="id"><?php echo $data['post']['id']; ?></span>
  <h1 id="title"><?php echo $data['post']['title']; ?></h1>
  <p id="content"><?php echo $data['post']['content']; ?></p>
  <p><button onclick="javascript:openEditBox()">Edit</button></p>

  <h1>Comments</h1>
  <p><textarea rows="10" columns="30" placeholder="Add a Comment!"></textarea><button>Submit Comment</button></p>
  </div>
</div>
<div id="editBox"></div>
<?php require('includes/footer.html'); ?>