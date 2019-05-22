<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $gender = 'Homme';
        if ($gender == 'Femme') {
            echo 'Vous êtes une femme';
        } else {
            echo 'Vous êtes un homme';
        }
        $age = 10;
         if ($age >= 18) {
            echo ' et vous êtes majeur';
        } elseif ($age < 0) {
            echo ' Ce nest pas possible';
        } else {
            echo ' et vous êtes mineur';
        }
        ?>
    </body>
</html>