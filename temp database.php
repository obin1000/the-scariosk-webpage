<?php
    if (Isset($_FILES['uploadfoto'])){
        //variabelen voor de upload
        $foto = $_FILES['uploadfoto'];
        $uploadlocatie = "foto/". basename($_FILES["fileToUpload"]["name"]);
        print_r($foto);

        // Verbinding creeeren met de database
        $link = new mysqli(localhost, prinses, prinses1337, prinsesdb);
        // Error check voor de verbinding
        if ($link->connect_error) {
            die("Connection failed: " . $link->connect_error);
        }
        
        //collect de data uit de form
        
        
        //insert data naar de database
        $insertdata = "INSERT INTO foto (bestand)
                VALUES(1,LOAD_FILE('$foto')";
        
        mysqli_query($link, $insertdata);
        
        if(move_uploaded_file($_FILES['uploadfoto']['tmp_name'], $uploadlocatie)){
            echo 'success';
        }else{
            echo 'failed';
        }

        //verbinding met de database verbreken  
        $link->close();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Die ene kiosk</title>
    </head>
    <body>
        <!--form voor de upload van de foto -->
        <form method="post" action="index.php" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="uploadfoto">
            <input type="submit" name="submit" value="Ding uploaden">
        </form>

        
        
    </body>
</html>
