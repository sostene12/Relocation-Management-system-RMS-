<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylelog.css">
</head>
<body>
    <div class="hero">
        <div class="formbox">
            <div class="bottonbox">
                <div id="btn"></div>
                <button type="button" class="togglebtn" onclick="login()">Log In</button>
                <button type="button" class="togglebtn" onclick="signup()">SignUp</button>
                
            </div>
            <div class="socialicons">
                <img src="facebook.png" alt="fb">
                <img src="twitter.png" alt="twitter">
                <img src="instagram.png" alt="instagram">
            </div>
            <form id="login" class="input-group" action="login.php" method="POST">
                <input type="text" class="inputfield" placeholder="username" name="username">
              
                <input type="password" class="inputfield" placeholder="password" id="myinput" name="password">
               
                <button type="submit" class="submit" name="login" >Log In</button>
            </form>
            <form id="signup" class="input-group" action="signup.php" method="POST">
                <input type="email" class="inputfield" placeholder="Email" name="email" required>
                <input type="text" class="inputfield" placeholder="username" name="username">
                <input type="password" class="inputfield" placeholder="password" name="password">
                <button type="submit" class="submit" name="signup">Signup</button>
            </form>
        </div>
        
    </div>
    <script>
        var x=document.getElementById("login");
        var y=document.getElementById("signup");
        var z=document.getElementById("btn");

        function signup(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";


        }
        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";
        }
        function myfunction(){
            var m= document.getElementById("myinput");
            var n= document.getElementById("hide1");
            var o= document.getElementById("hide2");

            if(m.type == 'password'){
                m.type="text";
                n.style.display= "block";
                o.style.display = "none";
            }
            else{
                m.type="password";
                n.style.display= "none";
                o.style.display = "block";  
            }
        }
    </script>
</body>
</html>