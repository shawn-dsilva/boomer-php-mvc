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
  <a href="/post/<?= $item['id']?>">
  <h2><?= $item['title']?></h2>
  </a>
  <h2 class="post-metadata"><?php echo "Author :- "."<a href='/users/".$item['username']."'>".$item['name']." ( ".$item['username']." ) </a>" ; ?></h2>
  <h2 class="post-metadata"><?php echo "Posted On ".$item['created_at']; ?></h2>
  <p><?= substr($item['content'], 0, 150)."..."?></p>
  <a href="/post/<?= $item['id']?>">READ MORE => </a>
  </div>

<?php endforeach; ?>
</div>
</div>
</div>
<?php require('includes/footer.html'); ?>
