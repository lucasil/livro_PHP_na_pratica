<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Atitméticas</title>
</head>
<body>
    <h1>Exercício 6 - Operações Aritméticas</h1>

    <?php
        $n1 = 2;
        $n2 = 5;
        $n3 = 8;
        $soma = $n1 + $n2 + $n3;
        
        echo "A soma de $n1, $n2 e $n3 é: $soma.<br>";

        $raiz = sqrt($soma); // sqrt() faz a raíz quadrada no número entre parêntesis

        echo "A raiz quadrada de $soma é: $raiz.";
    ?>
</body>
</html>