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
            $str = 'Techstudy - the Debugging Solution website';
            //  ici on faire une recherche  et un remplacement d'expression avec la fonction preg_rreplace()
            echo str_replace('/the/', 'best', $str)."\n";
        ?>
    </body>
</html>