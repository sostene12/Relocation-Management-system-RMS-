<?php
session_start();

if (isset($_POST['submit'])) {
    include_once 'database.php';
    $uname = $_POST['username'];
    $pwd = $_POST['password'];

    if (empty($uname) || empty($pwd)) {
        header("Location:login.php?error=empty");
        exit();
    } else {
        $sql = "SELECT* FROM users WHERE userName='" . $uname . "';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            if ($row = mysqli_fetch_assoc($result)) {
                if ($row['pwd'] == $pwd) {
                    $_SESSION['uname'] = $row['userName'];
                    header("Location:admin.php?error=success");
                    exit();
                } else {
                    header("Location:login.php?error=pwd");
                    exit();
                }
            }
        } elseif ($resultCheck < 1) {
            header("Location:login.php?error=invalidUser");
            exit();
        }
    }
} else {
    header("Location:login.php");
    exit();
}
