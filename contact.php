<?php
include_once('phpcontact.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>responsive contact us page</title>
    <link rel="stylesheet" href="contact.css">
</head>

<body>

    <script src="contact.js"></script>
    <section class="contact">

        <div class="content">
            <h2>contact us</h2>
            <div class="call">
                <p> We love To communicate with you,If you have any problem or a sugestions</p>
                <p> Please do not hesitate to let us know with our platforms or via Message</p>
            </div>
        </div>
        <div class="container">
            <div class="contactinfo">
                <div class="box">
                    <div class="icon">

                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                        </svg>
                    </div>
                    <div class="text">
                        <h3>address</h3>
                        <p>HUYE District-NGOMA sector</p>
                        <p>Near the market hall</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">

                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" class="svg-inline--fa fa-phone fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path>
                        </svg>

                    </div>
                    <div class="text">
                        <h3>phone</h3>
                        <p>+250787938344</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">

                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="envelope" class="svg-inline--fa fa-envelope fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"></path>

                        </svg>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>ngarukiyimanasostene@gmail.com</p>
                    </div>
                </div>

            </div>
            <div class="contactform">
                <form method="POST" action="contact.php" name="form" onsubmit="return validate()">
                    <h2>Send message</h2>
                    <div class="inputbox">
                        <input type="text" name="fullname" id="fullname" value="<?php echo htmlspecialchars($name) ?>">
                        <span>Full name</span>
                        <div class="red"><?php echo $errors['fullname']; ?></div>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($email) ?>">
                        <span>Email</span>
                        <div class="red"><?php echo $errors['email']; ?></div>
                    </div>
                    <div class="inputbox">
                        <textarea id="" cols="30" rows="10" name="text" id="text"></textarea>
                        <span>Type your message........</span>
                    </div>
                    <div class="inputbox">
                        <input type="submit" name="submit" value="send">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>