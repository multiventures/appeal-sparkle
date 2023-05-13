<!DOCTYPE HTML>
            <html>
                <head>
                    <title>Users </title>
                    <link rel="stylesheet" href="users.css">
                    <meta name="theme-color" content="blueviolet">                    
                </head>
                <body class="container">

                <?php
                    $con = mysqli_connect('localhost','root','','appeal sparkle spa');

                    if(mysqli_connect_errno()){
                        echo"Failed to connect: ".mysqli_connect_error();
                    }

                    $sql = "SELECT client_id,user_name, email, phone_number, whatsapp_number, gender FROM clients_1";

                    $result = mysqli_query($con, $sql);
                    $comp_pass = base64_encode("1234");

                    if (mysqli_num_rows($result) > 0) {
                            $pswd = "98761";
                            $pswd =  isset($_POST["pswd"]) ? $_POST["pswd"]: 2980;

                            if(base64_encode("$pswd") == $comp_pass){
                                echo '<script>alert("A limited time has been set to help protect user data")</script>';
                                ?>
                                <div class="header">
                                    <meta http-equiv="refresh" content="60;url=users.php">
                                    <script src="user.js"></script>
                                    <img src="spa-img/logo-1.png" alt="">
                                    <nav class="nav">
                                        <ul>
                                            <li><a href="index.html"><img style="width: 40px; height: 40px;border-radius: 50%;background: linear-gradient(20deg, green,orange,black);" src="access/5974907.png" alt="HOME">HOME</a></li>
                                            <li><a href="service.html"><img src="access/internet.png" alt="SERVICES" style="background:linear-gradient(120deg, green,crimson,black);width: 40px; height: 40px;border-radius: 50%;font-weight: bold;">SERVICES</a></li>
                                            <li><a href="login.php"><img style="width: 40px; height: 40px;border-radius: 50%;background: linear-gradient(20deg, green,blueviolet,black);" src="access/account-t.png" alt="ACCOUNT">ACCOUNT</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <table>
                                <h2>Clients Table</h2>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Username</th>
                                        <th id="email">Email</th>
                                        <th id="phone">Phone number</th>
                                        <th>Whatsapp number</th>
                                        <th>Gender</th>
                                        <th>Delete Record</th>
                                        <th>Change Password</th>
                                    </tr>
                
                                <?php
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                    $gender = $row['gender'];
                                    if($gender == "male"){
                                    ?>
                                        <div class="male">
                                            <tr style="color: rgb(187,133,200);background: rgba(238, 248, 225, 0.8);">
                                                <td><?php echo"$row[client_id]"; ?></td>                                                <td  id="user_name"><?php echo"$row[user_name]"; ?></td>
                                                <td><?php echo"$row[email]"; ?></td>
                                                <td><?php echo"$row[phone_number]"; ?></td>
                                                <td  id="whatsapp"><?php echo"$row[whatsapp_number]"; ?></td>
                                                <td id="gender">
                                                    <?php echo"M";?>
                                                </td>
                                                <td><a href="delete.php?id=<?php echo "$row[client_id]";?>">Delete</a></td>
                                                <td><a href="account_update.php?id=<?php echo "$row[client_id]";?>">Update</a></td>
                                            </tr>
                                        </div>
                                        
                                    <?php
                                    }
                                    elseif ($gender == "female"){
                                        ?>
                                        <tr style="color: orange;background: rgb(255, 255, 255,0.8);">
                                            <td><?php echo"$row[client_id]"; ?></td>                                           <td  id="user_name"><?php echo"$row[user_name]"; ?></td>
                                            <td><?php echo"$row[email]"; ?></td>
                                            <td><?php echo"$row[phone_number]"; ?></td>
                                            <td id="whatsapp"><?php echo"$row[whatsapp_number]"; ?></td>
                                            <td id="gender">
                                                <?php echo"F";?>
                                            </td>
                                            <td><a href="delete.php?id=<?php echo "$row[client_id]";?>">Delete</a></td>
                                            <td><a href="account_update.php?id=<?php echo "$row[client_id]";?>">Update</a></td>
                                        </tr>
                                    <?php
                                    }
                                    else{
                                        ?>
                                        <tr style="color:tomato;background: rgb(255, 255, 255,0.8);">
                                                <td><?php echo"$row[client_id]"; ?></td>
                                               <td  id="user_name"><?php echo"$row[user_name]"; ?></td>
                                                <td><?php echo"$row[email]"; ?></td>
                                                <td><?php echo"$row[phone_number]"; ?></td>
                                                <td id="whatsapp"><?php echo"$row[whatsapp_number]"; ?></td>
                                                <td id="gender">
                                                    <?php echo"T";?>
                                                </td>
                                                <td><a href="delete.php?id=<?php echo "$row[client_id]";?>">Delete</a></td>
                                                <td><a href="account_update.php?id=<?php echo "$row[client_id]";?>">Update</a></td>
                                        </tr>
                                    <?php
                                    }
                                }
                            }
                            else {
                                ?>
                                
                                <img src="spa-img/logo-1.png" alt="">
                                <nav class="nav">
                                    <ul style="margin-top: -70px;margin-left: 70px;">
                                        <li><a href="index.html"><img style="width: 40px; height: 40px;border-radius: 50%;background: linear-gradient(20deg, green,orange,black);" src="access/5974907.png" alt="HOME">HOME</a></li>
                                        <li><a href="service.html"><img src="access/internet.png" alt="SERVICES" style="background:linear-gradient(120deg, green,crimson,black);width: 40px; height: 40px;border-radius: 50%;text-transform: bold;">SERVICES</a></li>
                                        <li><a href="login.php"><img style="width: 40px; height: 40px;border-radius: 50%;background: linear-gradient(20deg, green,blueviolet,black);" src="access/account-t.png" alt="ACCOUNT">ACCOUNT</a></li>
                                   </ul>
                                </nav>
                                <form action="users.php" method="POST">
                                    <div style="width:215px;margin: auto;background: url('spa-img/IMG-2.jpg'); padding: 3%; border-radius: 3%;margin-top: 40px;">
                                        <h4 style="padding:4%;width:150px;background: rgb(4, 124, 30, 0.95);border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-top-left-radius: 20px;border-bottom-left-radius: 20px;margin-left: 1.3%;">
                                        <span style="text-transform: uppercase;text-decoration: underline;text-align:center;">Authorization password:<br></span>
                                        <span style="color:white;"><?php echo"Hint: [default]"; ?></span></h4>
                                        <input type="password" name="pswd" placeholder="Please input password" required><br>
                                        <br>    
                                        <button type="submit">Submit</button>
                                    </div>                            
                                </form>
                            <?php
                            }
                            ?>
                             </table>
                </body>
            </html>
            <?php
            }
            else{
                echo "No resulsts found";
            }        
    mysqli_close($con);
    ?>
             


