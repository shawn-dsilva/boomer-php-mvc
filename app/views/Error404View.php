<?php require('includes/header.html'); ?>
<?php require('includes/navbar.php'); ?>

<div class="error-container" >
<div class="error">
<i class="error-red fas fa-exclamation-circle"></i> &nbsp;
<h1> HTTP ERROR - </h1> <h1 class="error-red"><?php echo empty($data['errcode']) ? "404" : $data['errcode'] ; ?></h1>
<br>
<br>
<hr>
<br>
<p><?php echo $data['msg']; ?></p>
</div>
</div>
<?php require('includes/footer.html'); ?>
