<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <input type="text" name="firstname" id="first">
        <input type="text" name="lastname" id="last">
        <input type="submit">
    </form>


    <?php

    $a = 0;

    foreach ($_POST as $x) {
        if ($x != "") {
            $a++;
        }
    }
    echo "Le nombre d'argument POST envoyé est : $a";

    ?>

</body>

</html>