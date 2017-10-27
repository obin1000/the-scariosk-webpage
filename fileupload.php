<?php
//variables als opslag van de data van de file
$foto = $_FILES['foto'];            
$foto_naam = $foto['name'];                     //orginele bestandsnaam
$foto_tmp = $foto['tmp_name'];                  //tijdelijke opslag
$foto_error = $foto['error'];                   //error counter                 
$id = range(0, 999999);                       //Lijst met nummers 0 to 999999999
shuffle($id);                                   //shuffel de array doorelkaar
$foto_id = array_shift($id);                    //pak en verwijder id uit array
$foto_locatie = 'foto/' . $foto_id . '.jpg';    //path naar /foto als id.jpg

if($foto_error > 0){                //check voor errors
    die("Error uploading" . $error);
}
else{
    //als er geen errors zijn wordt de afbeelding geupload
    if (move_uploaded_file($foto_tmp, $foto_locatie)){
        //De klant de id laten zin waarmee de foto kan worden opgehaald
        echo "<h1>Uw code is $foto_id</h1>";   
    }
}
//verbinding maken met de lokale database
$conn = new mysqli("localhost", "prinses", "prinses1337", "prinsesdb") or die(mysql_error());

//query voor heet invullen van de ID en locatie van de foto
$sql = "INSERT INTO foto (id,path) VALUES ('$foto_id','$foto_locatie')";

if ($conn->query($sql) === TRUE) {
} 
else {  //errorcheck voor het toevoegen aan de database
    echo "failed adding to database: " . $sql . "<br>" . $conn->error;
}
//verbreken van de verbinding met de database
$conn->close();
