<?php

include_once('database.php');

$name = $email = '';
$errors = array('fullname' => '', 'email' => '', 'text' => '');

if (isset($_POST['submit'])) {
    $text = $_POST['text'];
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    //name validation
    if (empty($_POST['fullname'])) {
        $errors['fullname'] = 'name can not be empty';
    } else {
        $name = $_POST['fullname'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
            $errors['fullname'] = 'full name must contain letters and spaces only';
        }
    }

    //email validation
    if (empty($_POST['email'])) {
        $errors['email'] = 'email can not be empty <br/>';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'email in not valid';
        } else {


            $sql = "INSERT INTO contacts (fullName,email,problem) values('$name','$email','$text');";
            mysqli_query($conn, $sql);
        }
    }
}
