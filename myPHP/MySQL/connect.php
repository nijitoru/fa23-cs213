<!DOCTYPE html>
<html lang="en">
    <head></head>
    <body>
        <?php
            $servername = "localhost";
            $username = "idiot";
            $password = "iamanidiot123";
                $conn = new mysqli($servername, $username, $password);
            if($conn -> connect_error){
                die("Connection failed." . $conn -> connect_error);
            }
            echo "Connected successfully. Welcome idiot.";

            $conn -> close();
        ?>
    </body>
</html>