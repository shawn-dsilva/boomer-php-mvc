<?php require('includes/header.html'); ?>
<div id="onePost">
  <span hidden id="id"><?php echo $data['id']; ?></span>
  <h2 id="title"><?php echo $data['title']; ?></h2>
  <p id="content"><?php echo $data['content']; ?></p>
  <button onclick="javascript:openEditBox()">Edit</button>

</div>
<div id="editpost"></div>
<script>ajaxSubmit('editpost')</script>
<?php require('includes/footer.html'); ?>