<nav class="navbar">
  <a class="logo" href="/">BOOMER</a>

  <div class="right-container">
    <a class="right-text" href="/users">Users</a>
    <a class="right-text" href="/posts">Posts</a>
    <?php if(empty($data) || !isset($data)) {
      echo " <a class='right-text' href='/login'>Login</a>
      <a class='right-text' href='/register'>Register</a>";

    } else {
      echo "       <span>Welcome, </span>
      <div class='user-dropdown'>
      <span class='right-text' href='/dashboard'><i class='fas fa-user'></i>".(empty($data['user_data']['name']) ?  " {$data['user_data']['username']} " : "  {$data['user_data']['name']} ({$data['user_data']['username']}) "  )."<i class='fas fa-angle-down'></i>
      </span>
        <div class='user-dropdown-content'>
        <a href='/profile'><i class='far fa-address-card'></i> Profile</a>
          <a href='/dashboard'><i class='fas fa-cogs'></i> Dashboard</a>
          <a href='#' onclick='javascript:logout()'><i class='fas fa-sign-out-alt'></i> Logout</a>

        </div>
      </div>" ;
    }?>

    <a class="right-text" href="https://www.github.com/shawn-dsilva/boomer-php-mvc">Source on Github <i class="fab fa-github"></i></a>

  </div>

</nav>
