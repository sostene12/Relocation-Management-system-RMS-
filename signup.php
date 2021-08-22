<?php
include("database.php");
if(isset($_POST['signup']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
  $sql="INSERT INTO users(email,username,password) VALUES ('$email','$username','$password');";
  mysqli_query($conn, $sql);
          //redirect
          header("Location: login2.php");
      }
?>