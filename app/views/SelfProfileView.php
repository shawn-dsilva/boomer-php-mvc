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
  ?>
    <h1>YOUR PROFILE</h1>

    <div class="profile-data">


<?php

unset($data['user_data']['id']);
echo "<form id='editprofile'>";

foreach($data['user_data'] as $key => $value) {

    if(empty($value) && ($key != 'email' || $key != 'username')) {
      if($key == 'about') {
        $pre = "<div class='profile-item'>
        <div class='profile-item-title'>
          {$icons[$key]}
          {$key}
        </div>";
        $post =  "<div class='profile-item-content profile-content-item'>
        This field is empty, click Edit to add something
        </div>
        <div class='about-container'>
        <span style='display:none;' class='count' id='count'></span>
        <textarea id='about-edit' class='profile-item-content profile-edit-item hide' name='{$key}' style='max-width:100%!important'  rows='15' cols='30' onkeyup='javascript:counter()' onkeydown='javascript:counter()' >You can now Edit your About section!</textarea>
        </div>
        </div>";

        echo($pre.$post);
      } else {
          $pre = "<div class='profile-item'>
      <div class='profile-item-title'>
        {$icons[$key]}
        {$key}
      </div>";
          $post =  "<div class='profile-item-content profile-content-item'  style='color:grey;'>This field is empty, click Edit to add something</div>
      <input class='profile-item-content profile-edit-item hide' type='text' name='{$key}' placeholder='You can now Edit your {$key} !'>
      </div>";
          echo($pre.$post);
      }

    } else {
      if($key == 'about') {
        $pre = "<div class='profile-item'>
        <div class='profile-item-title'>
          {$icons[$key]}
          {$key}
        </div>";
        $post =  "<div class='profile-item-content profile-content-item'>
        {$value}
        </div>
        <div class='about-container'>
        <span style='display:none;' class='count' id='count'></span>
        <textarea id='about-edit' class='profile-item-content profile-edit-item hide' name='{$key}' style='max-width:100%!important'  rows='15' cols='30' onkeyup='javascript:counter()' onkeydown='javascript:counter()' >{$value}</textarea>
        </div>
        </div>";

        echo($pre.$post);
      } else {
        if($key == 'username' || $key == 'email' ) {
          $pre = "<div class='profile-item'>
          <div class='profile-item-title'>
            {$icons[$key]}
            {$key}
          </div>";
              $post =  "<div class='profile-item-content '  >{$value}</div>
          </div>";
              echo($pre.$post);
        } else {
          $pre = "<div class='profile-item'>
          <div class='profile-item-title'>
            {$icons[$key]}
            {$key}
          </div>";
              $post =  "<div class='profile-item-content profile-content-item'  >{$value}</div>
          <input class='profile-item-content profile-edit-item hide' type='text' name='{$key}' value='{$value}'>
          </div>";
              echo($pre.$post);
        }

      }
    }

} ?>



<?php echo "</form>" ?>
    <!-- <div class="profile-item">
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
      </div> -->


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
