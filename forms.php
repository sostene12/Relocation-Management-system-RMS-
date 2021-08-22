<?php
include_once("database.php");
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
                    <td><a id="view" href="view.php?id=<?php echo $row['id']; ?>">View</a></td>
                    <td><a id="view" href="updatedata.php?id=<?php echo $row['id']; ?>">Update&save</a></td>
                    <td><a id="delete" href="deletedata.php?id=<?php echo $row['id']; ?>">Delete</a></td>
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
            #delete{
                background-color: #B0100B;
                font-size:20px;
                padding:5px;
                color:#ffff;
                margin-left:2px;
                border-radius:20px;
            }
            #view{
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
    </body>

    </html>