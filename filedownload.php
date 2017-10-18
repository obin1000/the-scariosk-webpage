<?php
$code = $_POST['code']; 
$link = new mysqli("localhost", "prinses", "prinses1337", "prinsesdb") or die(mysql_error());
$query = "SELECT * FROM foto WHERE (`id` LIKE '%".$code."%'";
$result = $link->query($query) or die('Error, query failed');
while($results = mysql_fetch_array($result)){
     // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop

         echo "<p><h3>".$results['path'];
         // posts results gotten from database(title and text) you can also show id ($results['id'])
 }

$link->close();


   
       