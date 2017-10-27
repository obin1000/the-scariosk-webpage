<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Corendon Scariosk</title>
        <link rel="icon" href="fotowebsite/icon.png">
        <link rel="stylesheet" type="text/css" href="opmaak.css">
    </head>
    <body>
        <!--form voor de upload van de foto -->
        <div class="layout">
        <form method="post" action="index.php" enctype="multipart/form-data">
            <img class="logocorendon" src="fotowebsite/logocorendon.jpg" alt="Image can't be displayed">
            <br />
            <input class="forminput" type="file" name="foto">
            <br />
            <input class="formsubmitbutton" type="submit" name="upload">
        </form>
        <!--form voor het ophalen van de foto -->
        <form method="post" action="display.php">
            <br />
            <input class="forminput" type="number" name="code" placeholder="Voer uw code in">
            <br />
            <input class="formsubmitbutton" type="submit" name="invoer">
        </form>
        <?php
        if (Isset($_POST['upload'])){
            include 'fileupload.php';
        }
        ?>
        
        </div>
    </body>
</html>
