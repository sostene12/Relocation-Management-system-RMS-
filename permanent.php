<?php
include_once('phppermanent.php');
?>
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
    <div class="container">
        <div class="title">CITZEN RELOCATION FORM</div>
        <form action="permanent.php" method="POST" enctype="multipart/form-data">
            <div class="userdetails">
                <div class="inputbox">
                    <span class="details">First Name</span>
                    <input type="text" class="input" name="firstname" value="<?php echo htmlspecialchars($name1) ?>">
                    <div class="red"><?php echo $errors['firstname']; ?></div>
                </div>
                <div class="inputbox">
                    <span class="details">Last Name</span>
                    <input type="text" class="input" name="lastname" value="<?php echo htmlspecialchars($name2) ?>">
                    <div class="red"><?php echo $errors['lastname']; ?></div>
                </div>
                <div class="inputbox">
                    <span class="details">Email</span>
                    <input type="email" class="input" name="email" value="<?php echo htmlspecialchars($email) ?>">
                    <div class="red"><?php echo $errors['email']; ?></div>
                </div>
                <div class="inputbox">
                    <span class="details">Id Number</span>
                    <input type="number" class="input" placeholder="" name='idnumber' value="<?php echo htmlspecialchars($id) ?>">
                    <div class="red"><?php echo $errors['idnumber']; ?></div>
                </div>
                <div class="inputbox">
                    <span class="details">Phone Number</span>
                    <input type="tel" class="input" name="phone" value="<?php echo htmlspecialchars($phone) ?>">
                    <div class="red"><?php echo $errors['phone'] ?></div>
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
                <input type="radio" name="marital" id="dot3" value="maried" checked>
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
                <textarea class="textarea" name="reason" id="" cols="90" rows="5" placeholder="your reason of moving in not more than 30 words"></textarea>
            </div>
            <div class="file">
                <span class="maritaltitle">Please attach the land ownership copy</span>
                <br>
                <input type="file" name="file" id="file">
                <div class="red"><?php echo $errors['file']; ?></div>
                <button name="sub">upload</button>
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