<?php
include("database.php");
    $account = "SELECT* FROM users;";
    $view = mysqli_query($conn, $account);
    if (!$account) {
        echo "Something is wrong" . mysqli_error($conn);
    } else {
?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>USER NAME</th>
                <th>PASSWORD</th>
                <th colspan="3">delete account</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($view)) {
            ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["password"]; ?></td>
                    <td><a id="delete" a href="deleteaccount.php?id=<?php echo $row['id']; ?>">DELETE</a></td>
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
            button {
                margin-left: 200px;
                /* position:absolute; */
                width: 120px;
                height: 40px;
                /* position: absolute; */
                right: 100px;

            }

            .accounts {
                margin-left: 200px;
                width: 80px;
                height: 40px;
                position: absolute;
                left: 200px;
                right: 100px;
            }

            table {
                margin-left: 200px;
                top: 150px;
                position: relative;
                z-index: -1;
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
        #delete{
                background-color: #B0100B;
                font-size:20px;
                padding:5px;
                color:#ffff;
                margin-left:2px;
                border-radius:20px;
            }
        </style>
    </head>

    <body>
    </body>

    </html>