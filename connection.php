<?php
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['country_code'].$_POST['phone_number'];
    $whatsapp_number = $_POST['country_code'].$_POST['whatsapp_number'];
    $gender = $_POST['gender'];
    $pswd = $_POST['pswd'];
    $pswd = base64_encode($pswd);



    $conn = mysqli_connect("localhost","root","","appeal sparkle spa");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    $sql  = "INSERT INTO clients_1 (first_name, last_name, user_name,email, phone_number, whatsapp_number, gender, pswd, joined_at)
    VALUES('$first_name','$last_name','$user_name','$email','$phone_number','$whatsapp_number','$gender','$pswd',now())";

    if (mysqli_query($conn, $sql)) {
            sleep(1.5);
            echo '<script>alert("Registration successfull, please login")</script>';
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        die();
        }
        mysqli_close($conn);
        header("Location: login.php");
?>