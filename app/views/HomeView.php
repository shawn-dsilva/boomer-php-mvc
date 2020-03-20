<?php require('includes/header.html'); ?>

  <nav class="navbar">
    <a class="logo" href="#home">BOOMER</a>

    <div class="right-container">
      <a class="right-text" href="/users">Users</a>
      <a class="right-text" href="/posts">Posts</a>
      <a class="right-text" href="/login">Login</a>
      <a class="right-text" href="/register">Register</a>
      <a class="right-text" href="https://www.github.com/shawn-dsilva/boomer-php-mvc">Source on Github <i class="fab fa-github"></i></a>

    </div>

  </nav>

<div class="main">
  <div class="intro-container">
  <div class="intro">
  <h1>BOOMER</h1>
  <h2>A PHP MVC Framework from Scratch.<br> No Libraries. No Dependencies. Just Pure PHP.</h2>
  </div>
    <div class="intro-content">
      <div class="intro-content-text">
        <h2>ABOUT</h2>
        <p>Boomer PHP MVC is a Framework made by 「 <a href="https://shawndsilva.com">Shawn D'silva</a> 」to learn PHP and
          core web development and software engineering concepts like Object Oriented programming, Model-View-Controller architecture, AJAX programming etc</p>
        <p>Without the aid of a pre-existing framework like Laravel, or any external packages</p>
        <p>BOOMER is built with the classic <b>L</b>inux, <b>A</b>pache, <b>M</b>ySQL, <b>P</b>HP  stack inside Docker containers on an Ubuntu host</p>
        <p>On the Front-End BOOMER uses JQuery, SASS and CSS3 FlexBox with AJAX calls wherever required, The CSS is all custom with no Bootstrap etc used</p>
        <p class="stack">
        <img src="http://konpa.github.io/devicon/devicon.git/icons/linux/linux-original.svg">
        <img src="http://konpa.github.io/devicon/devicon.git/icons/apache/apache-original-wordmark.svg">
        <img src="http://konpa.github.io/devicon/devicon.git/icons/mysql/mysql-original-wordmark.svg">
        <img src="http://konpa.github.io/devicon/devicon.git/icons/php/php-plain.svg">
        <img src="http://konpa.github.io/devicon/devicon.git/icons/docker/docker-original-wordmark.svg">
        <img src="http://konpa.github.io/devicon/devicon.git/icons/ubuntu/ubuntu-plain-wordmark.svg">

        <img src="http://konpa.github.io/devicon/devicon.git/icons/jquery/jquery-original-wordmark.svg">
        <img src="http://konpa.github.io/devicon/devicon.git/icons/sass/sass-original.svg">
        </p>
      </div>
    </div>
    </div>

    <div class="features-container">
    <div class="features-content">
      <div class="intro-content-text">
        <h2>FEATURES</h2>
        <p>Boomer PHP MVC implements most common sense Web Framework features from scratch, like a Router, Middlewares, SQL QueryBuilder and Sessions based Authentication</p>
        <p>To demonstrate these features, this demo website is structured as a blogging platform, supporting multiple users, who can Create, View, Edit and Delete their own Blog posts, Comment on other's blog posts, edit & delete said comments, and customize their own user profile with a bio and a display picture</p>
        <p>These operations take place in a standard page based form, or using AJAX to update content without a page refresh</p>
      </div>

    </div>
    <div class="feature-card-container">
      <div class="feature-card">
        <h3>MVC Architecture</h3>
        <p>Based on the Model-View-Controller web architecture</p>
      </div>

      <div class="feature-card">
        <h3>Router</h3>
        <p>A parameterized router that abstracts the resource from the URI that the user enters</p>

      </div>

      <div class="feature-card">
        <h3>QueryBuilder</h3>
        <p>A safe Query Builder for MySQL that uses PDO under the hood, enabling developers to write legible, modular SQL queries instead of raw SQL </p>
      </div>

      <div class="feature-card">
        <h3>Authentication</h3>
        <p>Uses Sessions for persistence of Logins, and stores user passwords securely hashed in the database</p>

      </div>
      <div class="feature-card">
        <h3>Input Validation</h3>
        <p>All User input is validated for correctness according to the developers needs and sanitized from malicious attempts at code injection</p>

      </div>
      <div class="feature-card">
        <h3>MiddleWare</h3>
        <p>Middleware can be applied to all routes before being passed on to their controller </p>

      </div>

      </div>
    </div>


</div>
<?php require('includes/footer.html'); ?>
