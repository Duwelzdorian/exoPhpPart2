<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice5</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php
       
        $genderHF = array('Homme', 'Femme'); 
        $genderRand = array_rand($genderHF);
        $gender = $genderHF[$genderRand];
echo $gender.' => ';
if ($gender != 'Homme') 
{
    echo 'C\'est une développeuse !';
}
else
{
    echo 'C\'est un développeur !';
}
?>
    </body>
</html>