<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="fullpage">

    <div class="navbar">
      <div>
        <a href="website.html"><img src="assets.png" alt="logo image" class="img"></a>
      </div>
      <nav>
        <ul id="menuitems">
          <li><a href="#">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="permanent.php">Services</a></li>
          <li><a href="contact.php">contacts</a></li>
          <li><a href="Faq.php">Faq</a></li>
          <?php
          if (isset($_SESSION['user'])) {
            echo ' <li id="btn"><a href="destroy.php" id="btn">Logout</a></li>';
            echo ' <li id="btn"><a href="signup1.php" id="btn">Signup</a></li>';
          } else {
            echo '<li id="btn"><a href="#" id="btn" onclick="openForm()" >Login</a></li>';
            echo ' <li id="btn"><a id="btn" href="signup1.php">Signup</a></li>';
          }
          ?>
          <?php
          if (isset($_SESSION['user'])) {
            echo "<h2>" . "hello" . " " . '<img src="user.png" alt="usericon"> ' . $_SESSION['user'] . "</h2>";
          }

          ?>
        </ul>
      </nav>
    </div>
  </div>
  </div>

  <div class="content">
    <h1>Welcome to our Services Portal</h1>
    <p>we love to give you quick and efficient services of updating your address <br> without many lines Simply by applying through filling the form </p>

    <div>
      <button type="submit"><span></span><a href="permanent.php" class="link">Get Started</a></button>
      <button type="button"><span></span><a href="about.html">More info</a></button>
    </div>
  </div>
  <!-- LOGIN FORM -->
  <div class="form-popup" id="myForm">
    <form action="login1.php" class="form-container" method="POST">
      <h1>Login</h1>
      <input type="text" placeholder="User Name" name="username">
      <input type="password" placeholder="Enter Password" name="password">
      <input type="checkbox" value="admin" name="check" class="check">Admin
      <button type="submit" name="submit" class="btn">Login</button>
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
  </div>
  <!-- JAVASCRIPT -->
  <script>
    //login
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
  </script>
</body>

</html>