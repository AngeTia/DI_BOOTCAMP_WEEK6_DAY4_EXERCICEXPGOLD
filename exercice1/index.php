<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exercice1</title>
    </head>
    <body>
        <?php
            $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
            68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
            // explode()une fonction qui  retourne un table de chaînes de caractères,
            $table = explode(',', $month_temp);
            $total = 0;
            // ici on compte tous les éléments du table $month_temp
            $length_table = count($table);
            //on parcour le table
            foreach ($table as $temporaire) {
                $total += $temporaire;
            }
            //calcul pour trouver la temperature moyenne
            $tempMoyenne = $total/$length_table;
            echo "La température moyenne est : ".$tempMoyenne."";
            //sort() fonction de ranger par odre croissant
            sort($table);
            echo " Liste des cinq températures les plus basses  :";
            // ici on cherche les 5 temp les plus basses
            for ($i=0; $i< 5; $i++) {
                echo $table[$i].", ";
            }
            // ici on cherche les 5 temp les plus élévées
            echo "Liste des cinq températures les plus élevées :";
            for ($i=($length_table-5); $i< ($length_table); $i++) {
                echo $table[$i].", ";
            }
    ?>
    </body>
</html>