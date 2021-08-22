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
    <a href="index.php"><img  class="back" src="images/back.svg" alt="back icon"></a>
        <div class="formbox">
            <div class="line1"></div>
            <h3>Please sign up</h3>
            <div class="line"></div>
            <form id="signup" class="input-group" action="signup2.php" method="POST">
                <input type="email" class="inputfield" placeholder="Email" name="email">
                <input type="text" class="inputfield" placeholder="username" name="username">
                <input type="password" class="inputfield" placeholder="password" name="password">
                <input type="password" class="inputfield" placeholder="confirm password" name="cpassword">
                <button type="submit" class="submit" id="sub" name="signup">Signup</button>
            </form>
        </div>

    </div>
</body>

</html>