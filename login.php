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
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <div class="hero">
    <div class="formbox">
      <div class="log">
        <span>LOG in Here</span>
      </div>
      <form id="login" class="input-group" action="login1.php" method="POST">
        <input type="text" class="inputfield" placeholder="username" name="username">

        <input type="password" class="inputfield" placeholder="password" id="myinput" name="password">
        <input type="checkbox" value="admin" name="check" class="check">Admin

        <button type="submit" class="submit" name="submit">Log In</button>
      </form>
</body>

</html>