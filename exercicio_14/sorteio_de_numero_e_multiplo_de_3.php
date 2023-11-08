<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio de Número e Múltiplo de 3</title>
</head>
<body>
    <h1>Exercício 14 - Sorteio de Número e Múltiplo de 3</h1>
    
    <?php
        $num = rand(1 , 20); // a função rand() sorteia um número aleatório de acordo com o mínimo e máximo inserido nela

        if ($num % 3 == 0) {
            echo "O número $num é múltiplo de 3!";
        } else {
            echo "O número $num não é múltiplo de 3!";
        }
    ?>
</body>
</html>