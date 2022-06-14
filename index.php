<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relocation || Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container-fluid fullpage">
    <nav class="navbar navbar-expand-md  pt-2 pb-1">
      <div class="container-fluid">
        <a class="navbar-brand text-info" href="#intro">
          <img src="assets.png" alt="logo image" class="img-fluid w-50 d-none d-md-flex">
          <span class="text-light fw-bold d-flex d-md-none">
            <i class="bi bi-book-half"></i>
            RELOCATION
          </span>
        </a>
        <button class="navbar-toggler w-25 " type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list w-100 "></i>
          <!-- <span class="navbar-toggler-icon text-danger">
          </span> -->
        </button>
        <div class="collapse navbar-collapse justify-content-end align-center text-light" id="main-nav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#topics">About The Book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#reviews">Reviews</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Get in Touch</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- <div class="navbar">
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
  </div> -->

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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