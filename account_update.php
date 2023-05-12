
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="pnl_style.css">
    <link rel="icon" href="spa-img/logo-1.png">
    <title>Account Update</title>
    <meta name="theme-color" content="blueviolet">
</head>
<body>
    <?php $id = $_GET["id"];?>
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
                <li><a href="users.php"><img style="width: 40px; height: 40px;border-radius: 50%;" src="access/users.png" alt="ACCOUNT">Users</a></li>
            </ul>
        </nav>
        <div class="details">
            <form action="password_update.php" method="POST">
                <h1>Change Password</h1>
                <fieldset> <legend style="display:flex;margin-left:0;">
                    <img src="access/account.jpeg" style="width:20%;margin-left:-2%;border-radius: 50%;background: transparent;" alt="SUBMIT"><label><h3 style="padding: 0;margin-left:-77%;margin-bottom:-2%;">Username:</h3>
                    </label></legend>
                    <input type="text" max="20" name="user_name" required>
                </fieldset>

                <fieldset> <legend style="margin-left: 0;display: flex;object-fit: fill;padding: .3%;">
                    <img src="access/padlock.png" style="width:20%;margin-left:-2%;border-radius: 50%;background: white;object-fit: contain" alt="SUBMIT"><label><h3 style="padding: 0;margin-left:-20%;margin-bottom:0;">Input Password:</h3>
                    </label></legend>
                    <input type="password"name="pswd" required>
                </fieldset>                
                
                <fieldset> <legend style="margin-left: 0;display: flex;object-fit: fill;padding: .3%;">
                    <img src="access/padlock.png" style="width:20%;margin-left:-2%;border-radius: 50%;background: white;object-fit: contain" alt="SUBMIT"><label><h3 style="padding: 0;margin-left:-5%;margin-bottom:0;">Confirm Password:</h3>
                    </label></legend>
                    <input type="password"name="confirm_pswd" required>
                </fieldset>

                <input name="id" type="hidden"  value = "<?php echo $id ?>" >
                
                <button type="submit" class="btn1"><img src="access/paper_plane.png"></button>
            </form>
        </div>
    </div>
</body>
</html>