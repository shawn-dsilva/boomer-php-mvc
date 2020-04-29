<?php require('includes/header.html'); ?>
<?php require('includes/navbar.php'); ?>
<div class="postlist-bg">
<div class="postlist-container">
  <h1>Latest Posts From All Users</h1>

<?php
unset($data['user_data']);?>
<div class="list-container">
<?php foreach ($data['post_data'] as $item): ?>
<div class="postlist-item">
  <a href="post/<?= $item['id']?>">
  <h2><?= $item['title']?></h2>
  </a>
  <div class="post-metadata">
  <span><?php echo "Author :- "."<a href='users/".$item['username']."'>".$item['name']." ( ".$item['username']." ) </a>" ; ?></span>
  <span ><?php echo "Posted On ".$item['created_at']; ?></span>
  </div>
  <p><?= substr($item['content'], 0, 130)."..."?></p>
  <a class="read-more" href="post/<?= $item['id']?>">READ MORE => </a>
  </div>

<?php endforeach; ?>
</div>
</div>
</div>
<?php require('includes/footer.html'); ?>
