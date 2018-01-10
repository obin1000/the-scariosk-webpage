<?php
//inlezen van de ingevoerde code
$code = $_POST['code'];
//verbinding met de database maken
$link = new mysqli("localhost", "prinses", "prinses1337", "prinsesdb") or die(mysql_error());
//query voor het selecteren van de foto
$query = "SELECT path FROM foto WHERE id=$code";
//uitvoeren van de query
$exquery = $link->query($query);
//verzamelen van de resultaten
$row = $exquery-> fetch_assoc();
//variabele voor het oproepen van de foto
$foto_path= $row['path'];
$link->close();