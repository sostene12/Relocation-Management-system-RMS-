<?php
include_once("database.php");
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
                    <td><a class="add" href="adduser.php?id=<?php echo $row['id']; ?>">ADD</a></td>
                    <td><a class="delete" href="deleteuser.php?id=<?php echo $row['id']; ?>">DELETE</a></td>
                </tr>
    <?php
            }
            echo "</table>";
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
         .delete{
                background-color: #B0100B;
                font-size:20px;
                padding:5px;
                color:#ffff;
                margin-left:2px;
                border-radius:20px;
            }
            .add{
                background-color: #0B74B1;
                font-size:20px;
                padding:5px;
                color:#ffff;
                margin-left:2px;
                border-radius:20px;
            }
        table {
                margin-left: 200px;
                top: 30px;
                position: relative;
                border-collapse: collapse;
                width: 80%;
            }
            th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
        td{
            padding:8px;
        }
    </style>
</head>
<body>
<body>
</body>
</body>
</html>