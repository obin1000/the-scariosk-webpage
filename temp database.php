<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Die ene kiosk</title>
    </head>
    <body>
                <?php
                $servername = "localhost";
                $username = "prinses";
                $password = "prinses1337";
                $dbname ="prinsesdb";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                 }
                if(isset($_POST[naam])){
                    $sql = "INSERT INTO prinsje (naam,leeftijd)
                    VALUES ('$_POST[naam]', '$_POST[leeftijd]')";
                    
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                 }
                 $conn->close();
                ?>
    </body>
</html>
