<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio de Número e par/ímpar</title>
</head>
<body>
    <h1>Exercício 13 - Sorteio de Número e par/ímpar</h1>

    <?php
        $num = rand(1 , 10); // a função rand() sorteia um número aleatório de acordo com o mínimo e máximo inserido nela

        if ($num % 2 == 0) {
            echo "O número $num é par!";
        } else {
            echo "O número $num é ímpar!";
        }
    ?>
</body>
</html>