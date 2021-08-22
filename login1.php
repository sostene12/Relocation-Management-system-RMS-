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
            echo "<script>alert('wrong admin credentials !!');</script>";
            exit();
            // header("Location:index.php?error=adminwrongcredentials");
            
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
            echo "<script>alert('wrong user credentials !!');</script>";
            // header("Location:login.php?error=login");
        } else {
            while ($row = mysqli_fetch_assoc($grab)) {
                $pass = password_verify($password, $row['password']);
                if ($pass == $row['password']) {
                    $_SESSION['user'] = $row['username'];
                    header("Location:index.php");
                    exit();
                 } 
                 //else {
                //     echo "password doen't match!!!!";
                // }
            }
        }
    }
} else {
    header("Location:index.php.php?error=pleaselogin");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: teal;
        }
        .error{
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }
        button{
            width: 110px;
            outline: none;
            border: none;
            border-radius: 20px;
            height: 25px;
            background-color: #F7C1BB;
         
        }
        button a{
            text-decoration: none;
            color: #dc136c;;
            font-size: 19px;
        }
        button:hover{
            background-color: #885a5a;
        }
    </style>
</head>
<body>
    <div class="error"> 
        <br>
        <h3>Whoops!!! you have entered username or password is wrong</h3>
        <h3>please go back and try again</h3>
        <button><a href="index.php" >BACK</a></button>
</div>
    
</body>
</html>