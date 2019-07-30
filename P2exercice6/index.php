<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice6</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php
        $age = rand(1, 99);
        echo $age . ' => ';
        if ($age >= 18) {
            echo 'Tu es majeur.';
        } else {
            echo 'Tu es mineur.';
        }
        ?>
    </body>
</html>