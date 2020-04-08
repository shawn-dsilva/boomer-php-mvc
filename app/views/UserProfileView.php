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



      $title = " <div class='profile-item-title'>
        {$icons[$key]}
        {$key}
      </div>";

      $content = "<div class='profile-item-content profile-content-item' >{$value}</div>";

      $concat = $title.$content;

      echo(container($concat));

    }

    function container($content) {

      $complete = "<div class='profile-item'>{$content}</div>";
      return $complete;
    }

  ?>


    <h1><?php echo $data['user']['name']." ( ".$data['user']['username']." )"; ?></h1>

    <div class="profile-data">


      <?php

      unset($data['user']['id']);
      unset($data['user']['password']);

    // die(var_dump($data['user']));
        foreach($data['user'] as $key => $value) {
          render($icons,$key,$value);

        }
      ?>

    </div>

    </div>
  </div>


<?php require('includes/footer.html'); ?>
