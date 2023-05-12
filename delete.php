<html>
    <body>
        <?php
        $id = $_GET['id'];

        $con = mysqli_connect("localhost","root","","appeal sparkle spa");

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $sql = "delete from clients_1 where client_id=$id";
    

        if (mysqli_query($con, $sql)) {
        echo "Record deleted successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }

        mysqli_close($con);

        ?>
    </body>
</html>