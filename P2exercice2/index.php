<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice2</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php
        $isEasy = rand(0, 1);
        if ($isEasy == 0) {
            echo 'C\'est difficile !!!';
        } else {
            echo 'C\'est facile !!';
        }
        ?>
    </body>
</html>