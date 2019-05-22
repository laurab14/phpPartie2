<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $age = 18;
        if ($age >= 18){
            echo 'Vous êtes majeur';
        } elseif ($age < 0){
            echo 'Ce nest pas possible';
        } else {
            echo 'Vous êtes mineur';
        }
        ?>
    </body>
</html>
