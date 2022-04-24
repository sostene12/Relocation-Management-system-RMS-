<?php

session_start();

?>
<?php
include("database.php");
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (isset($_POST['check'])) {
        $check = true;
    } else {
        $check = false;
    }
    if ($check == true) {
        $result = "SELECT * FROM admin WHERE username='$username';";
        $grab = mysqli_query($conn, $result);
        if (mysqli_num_rows($grab) < 1) {
            header("Location:index.php?error=admin wrong");
        } else {
            while ($row = mysqli_fetch_assoc($grab)) {
                if ($password == $row['password']) {
                    $_SESSION['admin'] = true;
                    header("Location:admin.php");
                    exit();
                } else {
                    echo "password doen't match";
                }
            }
        }
    } else {
        $result = "SELECT * FROM users WHERE username='$username';";
        $grab = mysqli_query($conn, $result);
        if (mysqli_num_rows($grab) < 1) {
            header("Location:login.php?error=login");
        } else {
            while ($row = mysqli_fetch_assoc($grab)) {
                $pass = password_verify($password, $row['password']);
                if ($pass == $row['password']) {
                    $_SESSION['user'] = $row['username'];
                    header("Location:index.php");
                    exit();
                } else {
                    echo "password doen't match!!!!";
                }
            }
        }
    }
} else {
    header("Location:index.php.php?error=pleaselogin");
}
