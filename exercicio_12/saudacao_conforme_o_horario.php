<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudação Conforme o Horário</title>
</head>
<body>
    <h1>Exercício 12 - Saudação Conforme o Horário</h1>

    <?php
        date_default_timezone_set("America/Sao_Paulo"); // define o fuso horário
        
        $agora = date("H"); // a função date() define a data e hora afinal, dependendo do comando que é inserido dentro dela

        if ($agora < 12) {
            echo "<p style='color:green'>Bom dia!</p>";        
        } elseif ($agora <= 18) {
            echo "<p style='color:red'>Boa tarde!</p>";        
        } else {
            echo "<p style='color:blue'>Boa noite!</p>";        
        }
    ?>
</body>
</html>