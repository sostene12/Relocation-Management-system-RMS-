<?php

include_once("database.php");
if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $userame = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if ($password == $cpassword) {
        $pwd = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(email,username,password) VALUES('$email','$userame','$pwd');";
        mysqli_query($conn, $sql);
    } else {
        echo "password does'nt match";
    }
} else {
    header("Location:signup1.php?error=pleasesignup");
}
