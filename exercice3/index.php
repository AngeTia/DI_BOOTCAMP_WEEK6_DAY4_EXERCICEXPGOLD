<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exercice3</title>
    </head>
    <body>
        <?php
            $my_array = array("bmw","jeep","dastun","ferrari","Honda");
            //  ici on calcul la taille de la chaine du tableau  avec la fonction strlen()
            $new_array = array_map('strlen', $my_array);
            // Afficher la longueur de chaîne maximale et minimale à l'aide de la fonction max() et de la fonction min()
            echo "The shortest array length is ".min($new_array).". The longest array length is ".max($new_array).'.';
        ?>
    </body>
</html>