<?php
$code = $_POST['code']; 
$link = new mysqli("localhost", "prinses", "prinses1337", "prinsesdb") or die(mysql_error());
$query = "SELECT path FROM foto WHERE id=$code";
$exquery = $link->query($query);
$row = $exquery-> fetch_assoc();
$foto_path= $row['path'];
$link->close();