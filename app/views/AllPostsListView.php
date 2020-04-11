<?php require('includes/header.html'); ?>
<?php require('includes/navbar.php'); ?>
<div class="postlist-bg">
<div class="postlist-container">
  <h1>Latest Posts From All Users</h1>

<?php
unset($data['user_data']);
foreach ($data['post_data'] as $item): ?>
  <a href="/users/<?= $item['username']?>">

  <div class="postlist-item">
  <h2><?php echo $item['name']." ( ".$item['username']." ) " ?></h2>
  <h2 class="registered-date"><?php echo $item['registered_on']; ?></h2>
  </div>
  </a>

<?php endforeach; ?>
</div>
</div>
<?php require('includes/footer.html'); ?>
