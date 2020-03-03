<?php require('includes/header.html'); ?>

<h1>LOGIN</h1>

<form action="login" method="post" id="login">
E-Mail: <input type="text" name="email" id="email"><br>
Password: <input type="password" name="password" id="password"><br>
<input type="submit">
</form>
<div id="errorBox"></div>
<script  type="text/javascript">
    $('#login').on("submit", function(e) {
      e.preventDefault();
      $.ajax({
        type: "POST",
        url: '/login',
        data: {email: $('#email').val(), password: $('#password').val()},
        success: function(data) {
          console.log(data);
          if(data === "success") {
            window.location = '/dashboard';
          }
          $('#errorBox').html("<br><b>Error:</b> " + data);
        }
      });

    });

</script>
<?php require('includes/footer.html'); ?>
