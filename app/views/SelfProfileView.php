<?php require('includes/header.html'); ?>
<?php require('includes/navbar.php'); ?>

<div class="profile-container">
  <div class="profile-card">
  <?php
    $icons['name'] = "<i class='far fa-address-card'></i>";
    $icons['username'] = "<i class='fas fa-user'></i>";
    $icons['email'] = "<i class='fas fa-envelope'></i>";
    $icons['about'] = "<i class='fas fa-info-circle'></i>";
    $icons['location'] = "<i class='fas fa-map-marker-alt'></i>";

    function render($icons, $key, $value) {

      $emptyMsg =" This field is empty, click Edit to add something";
      $title = " <div class='profile-item-title'>
        {$icons[$key]}
        {$key}
      </div>";

      $content = "<div class='profile-item-content profile-content-item'  style='color:grey;'>".(empty($value) ? $emptyMsg : $value )."</div>";

      $input = "<input class='profile-item-content profile-edit-item hide' type='text' name='{$key}' placeholder='You can now Edit your {$key} !'>";

      $concat = $title.$content.$input;

      echo(container($concat));

    }

    function container($content) {

      $complete = "<div class='profile-item'>{$content}</div>";
      return $complete;
    }

  ?>
    <h1>YOUR PROFILE</h1>

    <div class="profile-data">


<?php

unset($data['user_data']['id']);
echo "<form id='editprofile'>";

foreach($data['user_data'] as $key => $value) {

  render($icons,$key,$value);

} ?>


<?php echo "</form>" ?>

</div>


<div class="profile-edit-container">

 <button class="profile-edit beforeedit"  onclick="javascript:openProfileEdit()"><i class="fas fa-cog" ></i> Edit Your Profile </button>

  <button class="profile-edit afteredit hide" class="profile-edit beforeedit" type="submit" form="editprofile" ><i class="far fa-save"></i> Save Changes </button>

  <button class="profile-edit afteredit hide" onclick="javascript:openProfileEdit()"><i class="fas fa-times"></i> Cancel Changes</button>
</div>


    </div>


  </div>
</div>
<script>ajaxSubmit('editprofile');
$('#about-edit').keyup(counter());
$('#about-edit').keydown(counter());</script>

<?php require('includes/footer.html'); ?>
