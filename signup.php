<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="pnl_style.css">
    <title>Appeal sparkle spa</title>
</head>
<body>

    <div class="container" style="height: 120vh; background-attachment: fixed;">
        <div class="comp_name">
            <img style=""src="spa-img/logo-1.png" width="200"> 
            <h2><span class="l1">APPEAL</span><br>
            <span class="l2">SPARKLE</span><br>
            <span class="l3">SPA</span></h1>
        </div>  
        
        <nav class="nav">
            <ul>
            <li><a href="index.html"><img style="width: 40px; height: 40px;border-radius: 50%;background: linear-gradient(20deg, green,orange,black);" src="access/5974907.png" alt="HOME">HOME</a></li>
                <li><a href="service.html"><img src="access/internet.png" alt="SERVICES" style="background:linear-gradient(120deg, green,crimson,black);width: 40px; height: 40px;border-radius: 50%;text-transform: bold;">SERVICES</a></li>
                <li><a href="login.php"><img style="width: 40px; height: 40px;border-radius: 50%;background: linear-gradient(20deg, green,blueviolet,black);" src="access/account-t.png" alt="ACCOUNT">ACCOUNT</a></li>
                <li><a href="login.php"><img style="width: 40px; height: 40px;border-radius: 50%;" src="access/users.png" alt="ACCOUNT">Users</a></li>
            </ul>
        </nav>

        <div class="details">
        <form action="connection.php" method="post">
            <h1>SIGN UP HERE!</h1>
            <tr>
                <td>
                    <fieldset> <label>First Name: <span style="margin-left: 10px;color:crimson;font-size:23px;border: 50%;cursor: none;">*</span></label>
                        <input type="text" max="20" name="first_name" required>
                    </fieldset>
                </td>
                <td>
                    <fieldset> <label>Last Name:</label>
                        <input type="text" max="20" name="last_name">
                    </fieldset>
                </td>
                <td>
                    <fieldset> <label>Username:</label><span style="margin-left: 10px;color:crimson;font-size:23px;border: 50%;cursor: none;">*</span>
                        <input type="text" max="20" name="user_name" required>
                    </fieldset>
                </td>
            </tr>
            
            <fieldset> <label>Phone no: <span style="margin-left: 4px;color:crimson;font-size:23px;border: 50%;cursor: none;">*</span></label>
                <select name="country_code" id="ccd" required>
                    <option disabled="disabled" selected="selected" style="display:none;">Country code</option>
                    <option value="+254">Kenya +254</option>
                    <option value="+255">Tanzania +255</option>
                    <option value="+256">Uganda +256</option>
                    <option value="+234">Nigeria +234</option>
                    <option value="+251">Ethiopia +251</option>
                    <option value="+27">South Africa +27</option>
                    <option value="+1">USA +1</option>
                </select>
                <input type="tel"max="15" name="phone_number" required>
            </fieldset>
            
            <fieldset> <label>Whatsapp:</label>
                <select name="country_code" id="ccd" required>
                    <option disabled="disabled" selected="selected" style="display:none;">Country code</option>
                    <option value="+254">Kenya +254</option>
                    <option value="+255">Tanzania +255</option>
                    <option value="+256">Uganda +256</option>
                    <option value="+234">Nigeria +234</option>
                    <option value="+251">Ethiopia +251</option>
                    <option value="+27">South Africa +27</option>
                    <option value="+1">USA +1</option>
                </select>
                <input type="tel" max="12" name="whatsapp_number">
            </fieldset>
            
            <fieldset> <label>Email:<span style="margin-left: 10px;color:crimson;font-size:23px;border: 50%;cursor: none;">*</span></label>
                <input type="email" max="30" name="email" required>
            </fieldset>
            
            <fieldset> <label>Password: <span style="margin-left: 10px;color:crimson;font-size:23px;border: 50%;cursor: none;">*</span></label>
                <input type="password" max="" name="pswd" required>
            </fieldset>
            <fieldset > <label>Gender:<span style="margin-left: 2px;color:crimson;font-size:23px;border: 50%;cursor: none;">*</span></label>
                <select name="gender" id="gender" style="padding:2%;background: rgb(75,0,130,0.6);color: orange;text-transform: uppercase;outline: none;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;border-top-left-radius: 20px;border-top-right-radius: 20px;text-align: center" required>
                    <option disabled="disabled" selected="selected" value="" style="display:none;">Select gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="trans">Transgender</option>
                </select>
            </fieldset>
            
            <button type="submit" class="btn1"><img src="access/paper_plane.png" alt="SUBMIT"></button>
            <tr><td><a href="login.php">click to login</a></td>
                <td>
                    <p>
                    <a href="">Contact customer care</a>
                    </p>
                </td>
            </tr>
        </form>
        </div>
    </div>
</body>
</html>