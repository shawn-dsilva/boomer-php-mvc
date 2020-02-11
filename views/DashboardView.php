<?php require('includes/header.html'); ?>

<h1>Welcome to Boomer MVC Dashboard</h1>
<?php if(!empty($data))
    echo "Given Array is not empty <br>";
    echo "Your E-Mail is {$data['email']} and Password is {$data['password']}  " ?>

<?php require('includes/footer.html'); ?>
