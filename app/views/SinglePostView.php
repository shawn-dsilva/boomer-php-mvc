<?php require('includes/header.html'); ?>
<?php require('includes/navbar.html'); ?>


<div id="onePost">
  <span hidden id="id"><?php echo $data['id']; ?></span>
  <h2 id="title"><?php echo $data['title']; ?></h2>
  <p id="content"><?php echo $data['content']; ?></p>
  <button onclick="javascript:openEditBox()">Edit</button>

</div>
<div id="editBox"></div>
<?php require('includes/footer.html'); ?>