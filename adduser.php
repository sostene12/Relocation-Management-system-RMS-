<?php
include_once("database.php");
if(isset($_POST['add'])){
    $username=$_POST['username'];
    $username=$_POST['password'];
    $adduser="INSERT INTO admin(username,password) VALUES(' $username',' $username');";
    mysqli_query($conn, $adduser);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
    <label>User Name</label>
    <input type="text" name="username"/>
    <label>Password</label>
    <input type="password" name="password"/>
    <button name="add" >SAVE</button>
    </form>
</body>
</html>