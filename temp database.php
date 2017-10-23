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
            <input type="file" name="foto">
            <input type="submit" name="upload">
        </form>
        <form method="post" action="index.php">
            <input type="number" name="code">
            <input type="submit" name="invoer">
        </form>
        <?php
        if (Isset($_POST['upload'])){
        include 'fileupload.php';
        }
        if (Isset($_POST['invoer'])){
        include 'filedownload.php';
        }
        ?>
        <img src="<?php echo $foto_path; ?>" />
    </body>
</html>
