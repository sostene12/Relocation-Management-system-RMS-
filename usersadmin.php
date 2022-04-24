<?php
include_once("database.php");
if(isset($_POST['user'])){
    $user = "SELECT* FROM admin;";
    $querry = mysqli_query($conn,$user);
    if (!  $user) {
        echo "Something is wrong" . mysqli_error($conn);
    } else {
?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>USER NAME</th>
                <th>PASSWORD</th>
                <th colspan="3">ADD/REMOVE</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($querry)) {
            ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["password"]; ?></td>
                    <td><a href="adduser.php?id=<?php echo $row['id']; ?>">ADD</a></td>
                    <td><a href="deleteuser.php?id=<?php echo $row['id']; ?>">DELETE</a></td>
                </tr>
    <?php
            }
            echo "</table>";
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
          table{
            margin-left:200px;
        top:150px;
        position:relative;
        z-index: -1;
        }
        button{
            margin-left:200px;
        }
        .contact{
            width:130px;
        height:50px;
        position:relative;
        left:200px;
        }
    </style>
</head>
<body>
<body>
<form action="#" method="POST">
    <button type="submit" name="user">USERS</button>
    </form>
</body>
</body>
</html>