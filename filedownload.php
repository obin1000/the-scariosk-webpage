<?php
//inlezen van de ingevoerde code
$code = $_POST['code'];
//verbinding met de database maken
$link = mysqli_connect("127.0.0.1", "scariosk", "veryscary", "scariosk") or die(mysql_error());
//query voor het selecteren van de foto
$query = "SELECT path FROM fotodata WHERE fotoid='$code'";
//uitvoeren van de query
$exquery = mysqli_query($link,$query) or die('foto niet gevonden');
//verzamelen van de resultaten
$row = mysqli_fetch_array($exquery);
//variabele voor het oproepen van de foto
$fotoAdbsolutePath= $row['path'];
//absoluut pad omzetten naar relatief voor de img tag van html
$fotoRelativePath = explode($_SERVER['DOCUMENT_ROOT'], $fotoAdbsolutePath);
$fotoRelativePath = end($fotoRelativePath);
$link->close();