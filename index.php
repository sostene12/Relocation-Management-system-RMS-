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
  <style>
    /* signup popup */
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}
.hero .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 35px;
  font-weight: 900;
  color:red;
  text-decoration: none;
}
/* signup */
.formbox {
  width: 320px;
  height: 380px;
  position: absolute;
  margin-left: -30px;
  margin-top: 200px;
  background-color: #ffffffcc;
  padding: 5px;
  justify-content: center;
  align-items: center;
  left: 50px;
}
.input-group {
  top: 140px;
  position: absolute;
  width: 240px;
  transition: 0.5s;
  left: 50px;
  margin-top: -30px;
}
.inputfield {
  width: 100%;
  padding: 10px 0;
  margin: 5px 0;
  border-left: 0;
  border-right: 0;
  border-top: 0;
  border-bottom: 1px solid #999;
  outline: none;
  background: transparent;
}
.submit {
  width: 85%;
  padding: 10px 30px;
  cursor: pointer;
  display: block;
  margin: auto;
  background: linear-gradient(to right, #ff105f, #ffad06);
  border: 0;
  outline: none;
  border-radius: 30px;
  margin-top: 20px;
}
h3 {
  text-align: center;
  text-transform: uppercase;
}
.line {
  width: 290px;
  height: 3px;
  background-color: black;
  margin-left: 20px;
  margin-top: 10px;
  border-radius: 50px;
}
.line1 {
  margin-top: 20px;
  margin-bottom: 10px;
  width: 290px;
  height: 3px;
  background-color: black;
  margin-left: 20px;
}
.icons{
  margin-top: 35px;
}
.icons img{
  width: 80px;
  height: 55px;
  margin-right: 30px;
}
.icons img:hover{
  background-color: teal;
  border-radius: 25px;
  padding: 5px auto;
}
  </style>
</head>

<body onload="dothis()">
  <div class="fullpage">

    <div class="navbar">
      <div>
        <a href="website.html"><img src="assets.png" alt="logo image" class="img"></a>
      </div>
      <nav>
        <ul id="menuitems">
          <li ><a href="index.php" id="home" >Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <?php if(isset($_SESSION['user'])){
            echo '<li><a href="permanent.php">Services</a></li>';
          } ?>
          <li><a href="contact.php">contacts</a></li>
          <li><a href="Faq.php">Faq</a></li>
          <?php
          if (isset($_SESSION['user'])) {
            echo ' <li id="btn"><a href="destroy.php" id="btn">Logout</a></li>';
          } else {
            echo '<li id="btn"><a href="#" id="btn" onclick="openForm()" >Login</a></li>';
            echo ' <li id="btn"><a id="btn" class="button" href="#popup1">Signup</a></li>';
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
      <button type="submit"><span></span><a href="signup1.php" class="link">Get Started</a></button>
      <button type="button"><span></span><a href="about.php">More info</a></button>
    </div>
      <p class="slide1">Firstly in order to use our service you must have an account</p>
      <P class="slide2">You create it by using signup tab, and then log in</p>
      <p class="slide2">And provide the correct information during creating your account</p>
      <div class="icons">
        <a href="https://twitter.com/?lang=en"><img src="images/twitter.svg" alt="twitter logo"></a>
        <a href="https://www.facebook.com/"><img src="images/facebook.svg" alt="facebook logo"></a>
        <a href="https://www.instagram.com/"><img src="images/instagram.svg" alt="instagram link"></a>
      </div>
  </div>
  
  <!-- LOGIN FORM -->
  <div class="form-popup" id="myForm">
    <form action="login1.php" class="form-container" method="POST">
      <h1>Login</h1>
      <input type="text" placeholder="User Name" name="username" required>
      <input type="password" placeholder="Enter Password" name="password" required>
      <input type="checkbox" value="admin" name="check" class="check">Admin
      <button type="submit" name="submit" class="btn">Login</button>
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
  </div>
  <!-- signup -->
  <div id="popup1" class="overlay">
    <div class="hero">
        <div class="formbox">
            <div class="line1"></div>
            <h3>Please sign up</h3>
            <a class="close" href="#">&times;</a>
            <div class="line"></div>
            <form id="signup" class="input-group" action="signup2.php" method="POST">
                <input type="email" class="inputfield" placeholder="Email" name="email" required>
                <input type="text" class="inputfield" placeholder="username" name="username" required>
                <input type="password" class="inputfield" placeholder="password" name="password" required>
                <input type="password" class="inputfield" placeholder="confirm password" name="cpassword" required>
                <button type="submit" class="submit" id="sub" name="signup">Signup</button>
            </form>
        </div>

    </div>
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

    function dothis(){
     var home= document.getElementById('home');
      home.style.color="#009688";
    }
  </script>
</body>

</html>