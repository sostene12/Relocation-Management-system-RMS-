<?php
$name1 = $name2 = $email = $id = $phone = $file = $gender = '';
$errors = array('firstname' => '', 'lastname' => '', 'email' => '', 'idnumber' => '', 'phone' => '', 'gender' => '', 'file' => '');
if (isset($_POST['submit'])) {
    include_once('database.php');
    // $first = $_POST['firstname'];
    // $last = $_POST['lastname'];
    // $email = $_POST['email'];
    // $id = $_POST['idnumber'];
    // $phone = $_POST['phone'];
    // $gender = $_POST['gender'];
    // $status = $_POST['marital'];
    $date = $_POST['date'];
    $reason = $_POST['reason'];
    $sector = $_POST['dropbox'];
    $cell = $_POST['slct1'];
    $village = $_POST['slct2'];
    //first name validation
    if (empty($_POST['firstname'])) {
        $errors['firstname'] = 'First name can not be empty';
    } else {
        $name1 = $_POST['firstname'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $name1)) {
            $errors['firstname'] = ' only letters and spaces are allowed';
        }
    }

    //second name validation
    if (empty($_POST['lastname'])) {
        $errors['lastname'] = 'Last name can not be empty';
    } else {
        $name2 = $_POST['lastname'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $name2)) {
            $errors['lastname'] = ' only letters and spaces are allowed';
        }
    }
    //email validation
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email can not be empty';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email is invalid';
        }
    }
    //id valiadtion
    if (empty($_POST['idnumber'])) {
        $errors['idnumber'] = 'id can not be empty';
    } else {
        $id = $_POST['idnumber'];
        if (!preg_match('/^[0-9]{16}$/', $id)) {
            $errors['idnumber'] = 'id can only contain 16 numbers';
        }
    }
    //phone number validation
    if (empty($_POST['phone'])) {
        $errors['phone'] = 'phone number can not be empty';
    } else {
        $phone = $_POST['phone'];
        if (!preg_match('/^[0-9]{10,12}$/', $phone)) {
            $errors['phone'] = 'phone number must contain only 10 up to 12 numbers';
        }
    }
    //gender validattion
    if (empty($_POST['gender'])) {
        $errors['gender'] = 'choose the gender';
    } else {
        $gender = $_POST['gender'];
        if ($gender == 'male') {
            $gender = "MALE";
        } else {
            $gender = "Female";
        }
    }
    //marital status validation
    if (empty($_POST['marital'])) {
        $errors['marital'] = 'marital status can not be empty';
    } else {
        $status = $_POST['marital'];
        if ($status == 'maried') {
            $status = 'MARIED';
        } else if ($status == 'devorced') {
            $status = 'DEVORCED';
        } else {
            $status = 'SINGLE';
        }
    }
    //file uplod
    // if (isset($_POST['sub'])) {
    //     $file = $_FILES['file'];

    //     $filename = $_FILES['file']['name'];
    //     $filetemp = $_FILES['file']['tmp_name'];
    //     $filesize = $_FILES['file']['size'];
    //     $fileerror = $_FILES['file']['error'];
    //     $filetype = $_FILES['file']['type'];

    //     $fileext = explode('.', $filename);
    //     $fileactualext = strtolower(end($fileext));

    //     $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    //     if (in_array($fileactualext, $allowed)) {
    //         if ($fileerror === 0) {
    //             if ($filesize < 1000000) {
    //                 $filenameNew = uniqid('', true) . "." . $fileactualext;
    //                 $filedestination = 'files/' . $filenameNew;
    //                 move_uploaded_file($filetemp, $filedestination);
    //                 header('Location:permanent.php?success');
    //             } else {
    //                 echo 'your file is too big';
    //             }
    //         } else {
    //             echo 'there was an error in uploading this file';
    //         }
    //     } else {
    //         echo 'you can not upload the files of this type';
    //     }
    // }
    $fn = $_FILES['file']['name'];
    $tem = $_FILES['file']['tmp_name'];
    move_uploaded_file($tem, 'files/' . $fn);

    $sql = "INSERT INTO citzen (firstName,lastName,email,idNumber,phoneNumber,moveDate,gender,maritalStatus,sector,cell,village,reason,fileUpload) VALUES (' $name1','$name2','$email','$id','$phone','$date','$gender','$status','$sector','$cell','$village','$reason','$fn');";
    mysqli_query($conn, $sql);
}
