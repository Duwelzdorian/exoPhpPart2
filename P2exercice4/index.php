<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice4</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php
        $magnitude = rand(1, 9);
        echo $magnitude . ' => '; // On tire un chiffre entre 1 et 9 qui affichera selon la valeur de la magnitude la phrase correspondante.
        switch ($magnitude) {
            case 1:
                echo "Micro-séisme impossible à ressentir.";
                break;

            case 2:
                echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
                break;

            case 3:
                echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
                break;

            case 4:
                echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
                break;

            case 5:
                echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
                break;

            case 6:
                echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
                break;

            case 7:
                echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
                break;
            case 8:
                echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
                break;
            case 9:
                echo "Séisme capable de tout détruire sur une très vaste zone.";
                break;

            default:
                echo "Désolé, je n'ai pas de message à afficher pour cette magnitude.";
        }
        ?>
    </body>
</html>