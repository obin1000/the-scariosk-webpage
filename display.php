<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Corendon Scariosk</title>
        <link rel="icon" href="fotowebsite/icon.png">
        <link rel="stylesheet" type="text/css" href="opmaak.css">
    </head>
    <body>
        <?php
        if (Isset($_POST['invoer'])){
            include 'filedownload.php';
        }
        ?>
        <div class="layout">
                <div class="header">
            <img class="logocorendon" src="fotowebsite/logocorendon.jpg">
                </div>
            <a href="index.php"><img class="arrowback" src="fotowebsite/arrowback.png" /></a>

            <table class="showcase">
                <tr>
                    <td><img class="imagedisplay" src="<?php echo $foto_path; ?>" /></td>
                    <td></td>
                    <td><img class="imagedisplay" src="<?php echo $foto_path; ?>" /></td>
                </tr>
                <tr>
                    <td><img class="imagedisplay" src="<?php echo $foto_path; ?>" /></td>
                    <td></td>
                    <td><img class="imagedisplay" src="<?php echo $foto_path; ?>" /></td>
                </tr>
                <tr>
                    <td><img class="imagedisplay" src="<?php echo $foto_path; ?>" /></td>
                    <td></td>
                    <td><img class="imagedisplay" src="<?php echo $foto_path; ?>" /></td>
                </tr>
            </table>
        </div>

    </body>
</html>