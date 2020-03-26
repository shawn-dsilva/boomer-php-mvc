<nav class="navbar">
  <a class="logo" href="/">BOOMER</a>

  <div class="right-container">
    <a class="right-text" href="/users">Users</a>
    <a class="right-text" href="/posts">Posts</a>
    <?php if(empty($data) || !isset($data)) {
      echo " <a class='right-text' href='/login'>Login</a>
      <a class='right-text' href='/register'>Register</a>";

    } else {
      echo " <a class='right-text' href='/dashboard'>Welcome {$data['user_data']['username']}</a>";
    }?>

    <a class="right-text" href="https://www.github.com/shawn-dsilva/boomer-php-mvc">Source on Github <i class="fab fa-github"></i></a>

  </div>

</nav>
