<?php
$firsterr = $lasterr = $emailerr = $iderr = $phoneerr =$dateerr=$Error=$maritalerr=$fileerr = $gendererr = '';
if (isset($_POST['submit'])) {
    include_once('database.php');
    $first = $_POST['firstname'];
    $last = $_POST['lastname'];
    $email = $_POST['email'];
    $id = $_POST['idnumber'];
    $phone = $_POST['phone'];
    // $gender = $_POST['gender'];
    // $status = $_POST['marital'];
    $date = $_POST['date'];
    $reason = $_POST['reason'];
    $sector = $_POST['dropbox'];
    $cell = $_POST['slct1'];
    $village = $_POST['slct2'];
    $file=$_FILES['file'];
    if(!empty($_POST['firstname'])&&!empty($_POST['lastname'])&&!empty($_POST['email'])&&!empty($_POST['idnumber'])&&!empty($_POST['phone'])&&!empty($_POST['date'])&&!empty($_POST['gender'])&&!empty($_POST['marital'])&&!empty($_POST['dropbox'])&&!empty($_POST['slct1'])&&!empty($_POST['slct2'])&&!empty($_FILES['file'])){
        //first name validation
        if (!preg_match("/^[a-zA-Z\s]*$/", $first)) {
            $firsterr = ' only letters and spaces are allowed';
        }
           //second name validation
        if (!preg_match('/^[a-zA-Z\s]+$/', $last)) {
            $lasterr = ' only letters and spaces are allowed';
        }
        //email validation
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerr = 'Email is invalid';
        }
         //id valiadtion
        if (!preg_match('/^[0-9]{16}$/', $id)) {
            $errors['idnumber'] = 'id can only contain 16 numbers';
        }
           //phone number validation
        if (!preg_match('/^[0-9]{10,12}$/', $phone)) {
            $phoneerr = 'phone number must contain only 10 up to 12 numbers';
        }
            //gender validattion
        if ($_POST['gender']== 'male') {
            $gender = "MALE";
        } 
        if($_POST['gender']== 'female'){
            $gender = "Female";
        }
        //marital status validation
        if ($_POST['marital'] == 'maried') {
            $status = 'MARIED';
        } 
        if ($_POST['marital'] == 'devorced') {
            $status = 'DEVORCED';
        }
        if($_POST['marital'] == 'single'){
            $status = 'SINGLE';
        }
        //fileupload
        if(isset($_FILES['file'])){
            $file_name = $_FILES['file']['name'];
            $file_size =$_FILES['file']['size'];
            $file_tmp =$_FILES['file']['tmp_name'];
            $file_type=$_FILES['file']['type'];
            $tmp=explode('.',$_FILES['file']['name']);
            $file_ext = end($tmp);
            
            $extensions= array("jpeg","jpg","png","pdf");
            
            if(in_array($file_ext,$extensions)=== false){
                $fileerr="extension not allowed, please choose a JPEG or PNG file.";
            }
            
            if($file_size > 2097152){
                $fileerr='File size must be excately 2 MB';
            }
            
            if(empty($fileerr)==true){
               move_uploaded_file($file_tmp,'files/'.$file_name);
            //    $name=$file_name;
              
        } 
        $sql = "INSERT INTO citzen (firstName,lastName,email,idNumber,phoneNumber,moveDate,gender,maritalStatus,sector,cell,village,reason,fileUpload) VALUES (' $first','$last','$email','$id','$phone','$date','$gender','$status','$sector','$cell','$village','$reason','$file_name');";
        mysqli_query($conn, $sql);  
        if(mysqli_query($conn, $sql)){
            echo '<h3 style="color:green;">Your request have successfly submited!!!!!</h3>';
        }
        else{
            echo '<h3 style="color:red;">failed</h3>'.mysqli_error($conn);
        }
    }
}
else{
    $Error="please fill all the fields";
}
}
?>

<!-- strat -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="permanent.css">
</head>

<body>
    <div class="info">
    <a href="index.php"><img  class="back" src="images/back.svg" alt="back icon"></a>
        <h3>Some information before Filling  the form</h3>
        <hr>
    <details>
    <summary>how the form is filled</summary>
    <h4>explanation</h4>
    <p>For good understanding you have to fill all fields correctly.</p>
    </details>
    <details>
    <summary>how the form is filled</summary>
    <h4>explanation</h4>
    <p>For good understanding you have to fill all fields correctly.</p>
    </details>
    <details>
    <summary>Please fill you correct information</summary>
    <h4>explanation</h4>
    <p>For a quick and easy service we would like to inform you that it is necessary to fill all of the information like correct email ,id number and all fields correctly.</p>
    </details>
    </div>
   
    </div>
    <div class="container">
    <div class="red"><?php if(isset($email)){echo $Error;} ?></div>
        <div class="title">CITZEN RELOCATION FORM</div>
        <form action="permanent.php" method="POST" enctype="multipart/form-data">
            <div class="userdetails">
                <div class="inputbox">
                    <span class="details">First Name</span>
                    <input type="text" class="input" name="firstname" value="<?php if(isset($first)){echo $first;} ?>">
                    <div class="red"><?php if(isset( $first)) {echo  $firsterr;} ?></div>
                </div>
                <div class="inputbox">
                    <span class="details">Last Name</span>
                    <input type="text" class="input" name="lastname" value="<?php if(isset($last)){echo $last;} ?>">
                    <div class="red"><?php if(isset( $last)) {echo  $lasterr;} ?></div>
                </div>
                <div class="inputbox">
                    <span class="details">Email</span>
                    <input type="email" class="input" name="email" value="<?php if(isset($email)){echo $email;} ?>">
                    <div class="red"><?php if(isset($email)) {echo $emailerr;} ?></div>
                </div>
                <div class="inputbox">
                    <span class="details">Id Number</span>
                    <input type="text" class="input" placeholder="" name='idnumber' value="<?php if(isset($id)){echo $id;} ?>">
                    <div class="red"><?php if(isset( $id)) {echo  $iderr;} ?></div>
                </div>
                <div class="inputbox">
                    <span class="details">Phone Number</span>
                    <input type="tel" class="input" name="phone" value="<?php if(isset($phone)){ echo $phone;} ?>">
                    <div class="red"><?php if(isset( $phone)) {echo  $phoneerr;} ?></div>
                </div>
                <div class="inputbox">
                    <span class="details">Date</span>
                    <input type="date" class="input" name="date" placeholder="enter you names">
                </div>
            </div>
            <div class="genderdetails">
                <input type="radio" name="gender" id="dot1" value="male">
                <input type="radio" name="gender" id="dot2" value="female">
                
                <span class="gendertitle">Gender</span>
                <div class="category">
                    <label for="dot1">
                        <span class="dot one"></span>
                        <span class="gender">Male</span>
                    </label>
                    <label for="dot2">
                        <span class="dot two"></span>
                        <span class="gender">Female</span>
                    </label>
                   
                </div>
            </div>
            <div class="maritaldetails">
                <input type="radio" name="marital" id="dot3" value="maried">
                <input type="radio" name="marital" id="dot4" value="devorced">
                <input type="radio" name="marital" id="dot5" value="single">
                <span class="maritaltitle">Marital status</span>
                <div class="class">
                    <label for="dot3">
                        <span class="dot three"></span>
                        <span class="maritalstatus">Maried</span>
                    </label>
                    <label for="dot4">
                        <span class="dot four"></span>
                        <span class="maritalstatus">Devorced</span>
                    </label>
                    <label for="dot5">
                        <span class="dot five"></span>
                        <span class="maritalstatus">Single</span>
                    </label>
                </div>
            </div>
            <div class="address">
                <p><span class="residence">Your current residance</span></p>
                <label>SECTOR</label>
                <select name="dropbox">
                    <option name="slct" value="NGOMA">NGOMA</option>
                    <!-- <option name="slct" value="tumba">TUMBA</option> -->
                    
                </select>
                <label>CELL</label>
                <select name="slct1" id="slct1" onchange="populate('slct1','slct2')">
                    <option value=""></option>
                    <option value="butare">BUTARE</option>
                    <option value="kaburemera">KABUREMERA</option>
                    <option value="matyazo">MATYAZO</option>
                    <option value="ngoma">NGOMA</option>
                </select>
                <label>VILLAGE</label>
                <select name="slct2" id="slct2">
                    <option value="bukinanyana">bukinanyana</option>
                </select>
            </div>
            <div>
                <p>Your Reason of Moving</p>
                <textarea class="textarea" name="reason" id="" cols="90" rows="5" placeholder="your reason of moving in not more than 30 words" value="<?php if(isset($reason)){ echo $reason;} ?>"></textarea>
            </div>
            <div class="file">
                <span class="maritaltitle">Please attach the land ownership copy</span>
                <br>
                <input type="file" name="file" id="file" value="<?php if(isset($name)){ echo $name;} ?>">
                <div class="red"><?php if(isset( $file)) {echo  $fileerr;} ?></div>
            </div>
               
            <div class="button">
                <input type="submit" value="SUBMIT" name="submit">
            </div>
        </form>
    </div>
    <script>
        function populate(s1, s2) {

            var s1 = document.getElementById(s1);
            var s2 = document.getElementById(s2);
            s2.innerHTML = "";

            if (s1.value == "butare") {
                var optionArray = ["|", "bukinanyana|BUKINANYANA", "buye|BUYE", "gasoro|GASORO", "kabutare|KABUTARE", "karubanda|KARUBANDA"];
            } else if (s1.value == "kaburemera") {
                var optionArray = ["|", "gatoki|GATOKI", "kaguhu|KAGUHU", "gasoro|GASORO", "karambi|KARAMBI", "nyabubare|NYABUBARE", "nyagapfizi|NYAGAPFIZI", "rugarama|RUGARAMA"];
            } else if (s1.value == "matyazo") {
                var optionArray = ["|", "gafurwe|GAFURWE", "kabeza|KABEZA", "kamucuzi|KAMUCUZI", "nyabitare|NYABITARE", "rurenda|RURENDA", "rusisiro|RUSISIRO"];
            } else if (s1.value == "ngoma") {
                var optionArray = ["|", "ngoma i|NGOMA I", "ngoma ii|NGOMA II", "ngoma iii|NGOMA III", "ngoma iv|NGOMA IV", "ngoma v|NGOMA V", "ngoma vi|NGOMA VI"];
            }
            for (var option in optionArray) {
                var pair = optionArray[option].split("|");
                var newOption = document.createElement("option");
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];
                s2.options.add(newOption);
            }
        }
    </script>
</body>

</html>