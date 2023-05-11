<!DOCTYPE HTML>
            <html>
                <head>
                    <title>Users </title>
                    <link rel="stylesheet" href="users.css">
                    
                </head>
                <body class="container">

                <?php
                    $con = mysqli_connect('localhost','root','','appeal sparkle spa');

                    if(mysqli_connect_errno()){
                        echo"Failed to connect: ".mysqli_connect_error();
                    }

                    $sql = "SELECT user_name, email, phone_number, whatsapp_number, gender FROM clients_1";

                    $result = mysqli_query($con, $sql);
                    $comp_pass = base64_encode("1234");

                    if (mysqli_num_rows($result) > 0) {
                            $pswd = "98761";
                            $pswd =  isset($_POST["pswd"]) ? $_POST["pswd"]: 2980;

                            if(base64_encode("$pswd") == $comp_pass){
                                echo '<script>alert("A limited time has been set to help protect user data")</script>';
                                ?>
                                <div class="header">
                                    <meta http-equiv="refresh" content="60;url=http://localhost/appeal%20sparkle/users.php">
                                    <script src="user.js"></script>
                                    <img src="spa-img/logo-1.png" alt="">
                                    <nav class="nav">
                                        <ul>
                                            <li><a href="index.html"><img style="width: 40px; height: 40px;border-radius: 50%;background: blue;" src="access/OIP.jpeg" alt="HOME">HOME</a></li>
                                            <li><a href="service.html"><img src="access/images.png" alt="SERVICES" style="width: 40px; height: 40px;border-radius: 50%;text-transform: bold;">SERVICES</a></li>
                                            <li><a href="login.php"><img style="width: 40px; height: 40px;border-radius: 50%;background: blue;" src="access/account.png" alt="ACCOUNT">ACCOUNT</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <table>
                                <h2>Clients Table</h2>
                                    <tr>
                                        <th>Username</th>
                                        <th id="email">Email</th>
                                        <th id="phone">Phone number</th>
                                        <th>Whatsapp number</th>
                                        <th>Gender</th>
                                    </tr>
                
                                <?php
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                    $gender = $row['gender'];
                                    if($gender == "male"){
                                    ?>
                                        <div class="male">
                                            <tr style="color:white;">                                                <td  id="user_name"><?php echo"$row[user_name]"; ?></td>
                                                <td><?php echo"$row[email]"; ?></td>
                                                <td><?php echo"$row[phone_number]"; ?></td>
                                                <td  id="whatsapp"><?php echo"$row[whatsapp_number]"; ?></td>
                                                <td id="gender">
                                                    <?php echo"M";?>
                                                </td>
                                            </tr>
                                        </div>
                                        
                                    <?php
                                    }
                                    elseif ($gender == "female"){
                                        ?>
                                        <tr style="color: orange;">                                            <td  id="user_name"><?php echo"$row[user_name]"; ?></td>
                                            <td><?php echo"$row[email]"; ?></td>
                                            <td><?php echo"$row[phone_number]"; ?></td>
                                            <td id="whatsapp"><?php echo"$row[whatsapp_number]"; ?></td>
                                            <td id="gender">
                                                <?php echo"F";?>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    else{
                                        ?>
                                        <tr style="color:rgb(102, 2, 102, 0.9);">
                                               <td  id="user_name"><?php echo"$row[user_name]"; ?></td>
                                                <td><?php echo"$row[email]"; ?></td>
                                                <td><?php echo"$row[phone_number]"; ?></td>
                                                <td id="whatsapp"><?php echo"$row[whatsapp_number]"; ?></td>
                                                <td id="gender">
                                                    <?php echo"T";?>
                                                </td>
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
                                        <li><a href="index.html">HOME</a></li>
                                        <li><a href="service.html">SERVICES</a></li>
                                        <li><a href="login.php">ACCOUNT</a></li>
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
             


