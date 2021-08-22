<?php
include_once("database.php");
if(isset($_POST['add'])){
    $username=$_POST['username'];
    $username=$_POST['password'];
    if(!empty($_POST['username'])&&!empty($_POST['password'])){
    $adduser="INSERT INTO admin(username,password) VALUES(' $username',' $username');";
    mysqli_query($conn, $adduser);
    }
    else{
        echo "The fields are empty";
    }
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
            color: #fff;
            font-size: 22px;
            display: block;
        }
        form{
            display: block;
            margin-top: 30px;
            margin-left: 20px;
        }
        form input{
            display: block;
            padding: 10px;
            outline: none;
            margin-top: 10px;
            width: 250px;
        }
        form button {
            width: 272px;
            padding: 10px;
            margin-top: 10px;
            display: block;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <form action="#" method="POST">
        <P>ADD USER</P>
    <input type="text" name="username" placeholder="Username"/>
    <input type="password" name="password" placeholder="Password"/>
    <button name="add" >SAVE</button>
    <button ><a href="admin.php">BACK</a></button>
    </form>
</body>
</html>