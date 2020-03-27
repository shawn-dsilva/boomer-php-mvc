<?php require('includes/header.html'); ?>
<?php require('includes/navbar.php'); ?>

<div class="profile-container">
  <div class="profile-card">

    <h1>YOUR PROFILE</h1>

    <div class="profile-data">
    <i class="far fa-id-card"></i>
    <h2>name : <?php echo $data['user_data']['username']; ?></h2>

      <h2>Username : <?php echo $data['user_data']['username']; ?></h2>

      <h2>Email is : <?php echo $data['user_data']['email']; ?></h2>
    </div>
  </div>
</div>

<?php require('includes/footer.html'); ?>
