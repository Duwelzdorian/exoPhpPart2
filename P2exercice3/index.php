<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice3</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php
        $age = rand(1, 100); // la variable age sera comprise entre 1 et 100
        $genderHF = array('Homme', 'Femme'); // Tableau Homme et Femme
        $genderRand = array_rand($genderHF); // Fonction array_rand pour piocher dans le tableau genderHF
        $gender = $genderHF[$genderRand];
        echo $age . ' ans, genre : ' . $gender;
        ?>

        <p>
            <?php
            if ($age < 18 AND $gender == 'Homme') {               // Homme
                echo 'Vous êtes un homme et vous êtes mineur.';
            } elseif ($age >= 18 AND $gender == 'Homme') {
                echo 'Vous êtes un homme et vous êtes majeur.';
            } elseif ($age < 18 AND $gender == 'Femme') {           // Femme
                echo 'Vous êtes une femme et vous êtes mineur.';
            } else {
                echo 'Vous êtes une femme et vous êtes majeur.';
            }
            ?>
        </p>

    </body>
</html>