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

      if(empty($value)) {
        $color = "style='color:grey;'";
        $text = $emptyMsg;
        $filling= "placeholder='You can now Edit your {$key} !'";
      } else {
        $text = $value;
        $filling="value='{$value}'";
      }

      $title = " <div class='profile-item-title'>
        {$icons[$key]}
        {$key}
      </div>";

      $content = "<div class='profile-item-content profile-content-item'  {$color}>{$text}</div>";

      $contentNoEdit = "<div class='profile-item-content '  {$color}>{$text}</div>";
      $input = "<input class='profile-item-content profile-edit-item hide' type='text' name='{$key}' {$filling}>";

      $aboutInput = "<div class='about-container'>
      <span style='display:none;' class='count' id='count'></span>
      <textarea id='about-edit' class='profile-item-content profile-edit-item hide' name='{$key}' style='max-width:100%!important'  rows='15' cols='30' onkeyup='javascript:counter()' onkeydown='javascript:counter()' {$filling} >{$text}</textarea>
      </div>";

      ($key == 'username' || $key == 'email') ? ($concat = $title.$contentNoEdit):(($key == 'about') ? ($concat = $title.$content.$aboutInput) : ($concat = $title.$content.$input));

      echo(container($concat));

    }

    function container($content) {

      $complete = "<div class='profile-item'>{$content}</div>";
      return $complete;
    }

  ?>


    <h1><?php echo $data['user_data']['name']." ( ".$data['user_data']['username']." )"; ?></h1>

    <div class="profile-data">


  <?php

  unset($data['user_data']['id']);
  unset($data['user_data']['password']);


    foreach($data['user_data'] as $key => $value) {

      render($icons,$key,$value);

    }
  ?>

  </div>

    </div>
  </div>
</div>


<?php require('includes/footer.html'); ?>
