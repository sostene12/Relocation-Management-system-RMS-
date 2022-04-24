<?php
include_once("database.php");
if (isset($_POST['form'])) {
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
                <th>DATE</th>
                <th>GENDER</th>
                <th>STATUS</th>
                <th>SECTOR</th>
                <th>CELL</th>
                <th>VILLAGE</th>
                <th>REASON</th>
                <th>FILE</th>
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
                    <td><?php echo $row["moveDate"]; ?></td>
                    <td><?php echo $row["gender"]; ?></td>
                    <td><?php echo $row["maritalStatus"]; ?></td>
                    <td><?php echo $row["sector"]; ?></td>
                    <td><?php echo $row["cell"]; ?></td>
                    <td><?php echo $row["village"]; ?></td>
                    <td><?php echo $row["reason"]; ?></td>
                    <td><?php echo $row["fileUpload"]; ?></td>
                    <td><a href="userDeatils.php?id=<?php echo $row['id']; ?>">View</a></td>
                    <td><a href="userUpdate.php">Update</a></td>
                    <td><a href="userDelete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
    <?php
            }
            echo "</table>";
        }
    }
    ?>