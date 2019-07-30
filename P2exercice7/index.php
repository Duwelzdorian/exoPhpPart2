<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice7</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
<?php
$isOk = rand (0,1);
echo $isOk.' => ';
if ($isOk == false)
{
    echo 'c\'est pas bon !!!';
}
 else {
echo 'c\'est ok !!';   
}
?>
    </body>
</html>