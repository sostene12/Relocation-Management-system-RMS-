<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Side Navigation Bar</title>
    <link rel="stylesheet" href="adminstyles.css">
</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
            <h2>ADMIN</h2>
            <ul>
                <div>
                    <li><a href="admin.php?page=forms" name="1">Forms</a></li>
                </div>
                <li><a href="admin.php?page=admincontacts">Contacts</a></li>
                <li><a href="admin.php?page=usersadmin">Users</a></li>
                <li><a href="admin.php?page=useraccount">user accounts</a></li>
                <li><a href="admin.php?page=aboutadmin">about</a></li>
                <li><a href="index.php">Website</a></li>
                <li><a href="logoutadmin.php" class="logout">logout</a></li>
            </ul>
        </div>
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : "forms";
        include $page . '.php';
        ?>

</body>

</html>