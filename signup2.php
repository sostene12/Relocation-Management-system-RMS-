<?php
include_once("database.php");
if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $userame = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if(!empty($_POST['email'])&&!empty($_POST['username'])&&!empty($_POST['password'])&&!empty($cpassword = $_POST['cpassword'])){
        //email validation
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "please provide a valid email";
        }
        //usernamevalidation
        if(!preg_match('/^[a-zA-Z\s]+$/',$userame)){
            echo "user name can contain only letters and spaces";
        }
    if ($password == $cpassword) {
        $pwd = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(email,username,password) VALUES('$email','$userame','$pwd');";
        mysqli_query($conn, $sql);
        if(mysqli_query($conn, $sql)){
            header("Location:index.php?login");
            exit();
        }
    } else {
        echo "password does'nt match";
    }
}
else{
    $Error= "please fill all fields";
}
} else {
    header("Location:index.php?error=pleasesignup");
    exit();
}
