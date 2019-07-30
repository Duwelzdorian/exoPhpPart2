<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice1</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php
        $age = rand(0, 99);
        if ($age < 18) {
            echo 'vous avez ' . $age . ' ans ,vous êtes mineur.';
        } else {
            echo 'vous avez ' . $age . ' ans ,vous êtes majeur.';
        }
        ?>
    </body>
</html>