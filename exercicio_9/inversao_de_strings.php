<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inversão de Strings</title>
</head>
<body>
    <h1>Exercício 9 - Inversão de Strings</h1>

    <?php
        $palavra = "Palavra";

        echo $palavra . "<br>";

        $palavra = strrev($palavra); // strrev() reverte a string colocada nos parêntesis

        echo $palavra;
    ?>
</body>
</html>