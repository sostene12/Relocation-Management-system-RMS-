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
  <form action="#" method="POST">
    <button type="submit" class="contact" name="contact">VIEW COMMENTS AND PROBLEMS</button>
    </form>
</body>
</html>


<?php
include_once("database.php");
if(isset($_POST['contact'])){
    $contact = "SELECT* FROM contacts;";
    $view = mysqli_query($conn, $contact);
    if (!$contact) {
        echo "Something is wrong" . mysqli_error($conn);
    } else {
?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>FULL NAME</th>
                <th>EMAIL</th>
                <th>PROBLEM/SUGESTION</th>
                <th colspan="3">ACTION</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($view)) {
            ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["fullName"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["problem"]; ?></td>
                    <td><a href="respond.php?id=<?php echo $row['id']; ?>">VIEW</a></td>
                    <td><a href="userUpdate.php">RESPOND</a></td>
                </tr>
    <?php
            }
            echo "</table>";
        }
    }
    ?>
