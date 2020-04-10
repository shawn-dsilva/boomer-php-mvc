<?php require('includes/header.html'); ?>
<?php require('includes/navbar.php'); ?>
<div class="userlist-bg">
<div class="userlist-container">
  <h1>Registered Users</h1>
  <div class="table-container">
    <div class="table-element">Real Name</div>
    <div class="table-element">Username</div>
    <div class="table-element">Registered On</div>
  </div>
<?php
unset($data['user_data']);
foreach ($data as $item): ?>
  <a href="/users/<?= $item['username']?>">

  <div class="userlist-item">
  <h2><?php echo $item['name']." ( ".$item['username']." ) " ?></h2>
  <h2 class="registered-date"><?php echo $item['registered_on']; ?></h2>
  </div>
  </a>

<?php endforeach; ?>
</div>
</div>
<?php require('includes/footer.html'); ?>
