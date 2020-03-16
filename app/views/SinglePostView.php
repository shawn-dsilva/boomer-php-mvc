<?php require('includes/header.html'); ?>
<div id="onePost">
  <h2 id="title"><?php echo $data['title']; ?></h2>
  <p id="content"><?php echo $data['content']; ?></p>
  <button onclick="javascript:openEditBox()">Edit</button>
</div>
<?php require('includes/footer.html'); ?>