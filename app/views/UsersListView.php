<?php require('includes/header.html'); ?>
<?php require('includes/navbar.php'); ?>
<div class="userlist-bg">
<div class="userlist-container">
  <h1>Registered Users</h1>
<?php foreach ($data as $item): ?>
  <div class="userlist-item">
    <h2><?php echo $item['name']." ( ".$item['username']." ) " ?></h2>
  </div>
<?php endforeach; ?>
</div>
</div>
<?php require('includes/footer.html'); ?>
