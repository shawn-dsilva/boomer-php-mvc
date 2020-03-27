<?php require('includes/header.html'); ?>
<?php require('includes/navbar.php'); ?>

<div class="profile-container">
  <div class="profile-card">

    <h1>YOUR PROFILE</h1>

    <div class="profile-data">

    <!-- <?php echo empty($data['user_data']['name']) ? "None" : "<div class='profile-item-content'>{$data['user_data']['username']}</div> "  ?> -->


    <div class="profile-item">
      <div class="profile-item-title"><i class="far fa-id-card"></i>
      Name </div>     <?php echo empty($data['user_data']['name']) ? "<div class='profile-item-content'>None</div>" : "<div class='profile-item-content'>{$data['user_data']['name']}</div> "  ?>
      </div>

      <div class="profile-item">

      <div class="profile-item-title"><i class="fas fa-user"></i>
      Username </div>    <?php echo empty($data['user_data']['username']) ? "<div class='profile-item-content'>None</div>" : "<div class='profile-item-content'>{$data['user_data']['username']}</div> "  ?>
      </div>

      <div class="profile-item">

      <div class="profile-item-title"><i class="fas fa-envelope"></i>
      E-Mail </div>    <?php echo empty($data['user_data']['email']) ? "<div class='profile-item-content'>None</div>" : "<div class='profile-item-content'>{$data['user_data']['email']}</div> "  ?>
      </div>

      <div class="profile-item">

      <div class="profile-item-title"><i class="fas fa-info-circle"></i>
      About </div>    <?php echo empty($data['user_data']['about']) ? "<div class='profile-item-content'>None</div>" : "<div class='profile-item-content'>{$data['user_data']['about']}</div> "  ?>
      </div>

      <div class="profile-item">

      <div class="profile-item-title"><i class="fas fa-map-marker-alt"></i></i>
      Location </div>    <?php echo empty($data['user_data']['location']) ? "<div class='profile-item-content'>None</div>" : "<div class='profile-item-content'>{$data['user_data']['location']}</div> "  ?>
      </div>

</div>


    </div>
  </div>
</div>

<?php require('includes/footer.html'); ?>
