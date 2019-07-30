<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice8</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php
        $isOk = rand(0, 1);
        echo $isOk . ' => ';
        if ($isOk == 1) {
            echo 'c\'est ok !!'; 
        } else {
            echo 'c\'est pas bon !!!';
        }
        ?>
    </body>
</html>
