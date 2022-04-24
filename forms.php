<?php
include_once("database.php");
if (isset($_POST['submit'])) {
    $result = "SELECT* FROM citzen;";
    $grab = mysqli_query($conn, $result);
    if (!$result) {
        echo "Something is wrong" . mysqli_error($con);
    } else {
?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>EMAIL</th>
                <th>ID NUMBER</th>
                <th>PHONE NUMBER</th>
                <th colspan="3">ACTION</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($grab)) {
            ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["firstName"]; ?></td>
                    <td><?php echo $row["lastName"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["idNumber"]; ?></td>
                    <td><?php echo $row["phoneNumber"]; ?></td>
                    <td><a href="view.php?id=<?php echo $row['id']; ?>">View</a></td>
                    <td><a name="update" href="updatedata.php?id=<?php echo $row['id']; ?>">Update&save</a></td>
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
            button {
                margin-left: 200px;
                /* position:absolute; */

            }

            .submit {
                width: 80px;
                height: 40px;
                position: absolute;
                left: 200px;
            }

            table {
                margin-left: 200px;
                top: 150px;
                position: relative;
                z-index: -1;
            }
        </style>
    </head>

    <body>
        <div>
            <form action="#" method="POST">
                <br>
                <button type="submit" class="submit" name="submit">Retrieve</button>
            </form>
        </div>
    </body>

    </html>