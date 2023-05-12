
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="pnl_style.css">
    <link rel="icon" href="spa-img/logo-1.png">
    <title>Login.php</title>
</head>
<body>
    <div class="container">
        <div class="comp_name">
            <img style=""src="spa-img/logo-1.png" width="200"> 
            <h2><span class="l1">APPEAL</span><br>
            <span class="l2">SPARKLE</span><br>
            <span class="l3">SPA</span></h2>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="index.html"><img style="width: 40px; height: 40px;border-radius: 50%;background: linear-gradient(20deg, green,orange,black);" src="access/5974907.png" alt="HOME">HOME</a></li>
                <li><a href="service.html"><img src="access/internet.png" alt="SERVICES" style="background:linear-gradient(120deg, green,crimson,black);width: 40px; height: 40px;border-radius: 50%;text-transform: bold;">SERVICES</a></li>
                <li><a href="login.php"><img style="width: 40px; height: 40px;border-radius: 50%;background: linear-gradient(20deg, green,blueviolet,black);" src="access/account-t.png" alt="ACCOUNT">ACCOUNT</a></li>
            </ul>
        </nav>
        <div class="details">
            <form action="login.php" method="POST">
                <h1>LOG IN HERE!</h1>
                <fieldset> <legend style="display:flex;margin-left:0;">
                    <img src="access/account.jpeg" style="width:20%;margin-left:-2%;border-radius: 50%;background: transparent;" alt="SUBMIT"><label><h3 style="padding: 0;margin-left:-77%;margin-bottom:-2%;">Username:</h3>
                    </label></legend>
                    <input type="text" max="20" name="first_name" required>
                </fieldset>
                
                <fieldset> <legend style="margin-left: 30%">
                    <label><h3 style="padding-left: 10%;margin-left:-35%;padding-right: 10%;margin-top:-2%;margin-bottom:-2%;">Password:</h3></label>
                    </legend>
                    <input type="password"name="pswd" required>
                </fieldset>
                
                <button type="submit" class="btn1"><img src="access/paper_plane.png"></button>
                <a href="signup.php">Don't have an account?</a>
                <p>Forgot password?</p>
            </form>
        </div>
    </div>
</body>
</html>
<?php

?>