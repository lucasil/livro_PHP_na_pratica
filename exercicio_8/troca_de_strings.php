<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troca de Strings</title>
</head>
<body>
    <h1>Exercício 8 - Troca de Strings</h1>    

    <?php
        $frase = "Comentários do Facebook não estão disponíveis no Google";

        echo $frase . "<br>";

        // str_replace("string na frase", "string pela qual quer trocar", frase);
        $frase = str_replace("Facebook", "troca1", $frase); // trocar a primeira palavra por outra qualquer
        $frase = str_replace("Google", "troca2", $frase); // trocar a egunda palavra por outra qualquer
        $frase = str_replace("troca1", "Google", $frase); // trocar a primeira palavra pela segunda
        $frase = str_replace("troca2", "Facebook", $frase); // trocar a segunda palavra pela primeira
        
        echo $frase;
    ?>
</body>
</html>