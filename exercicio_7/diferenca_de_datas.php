<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diferença de Datas</title>
</head>
<body>
    <h1>Exercício 7 - Diferença de Datas</h1>

    <?php
        $data1 = mktime(0, 0, 0, 2, 28, 2016);
        $data2 = mktime(0, 0, 0, 3, 4, 2016);
        $dif = $data2 - $data1;
        
        $dif_em_dias = ($dif)/(60*60*24);
        
        echo "A diferença de dias entre 28/02/2016 e 04/03/2016 é de $dif_em_dias dias.";
    ?>
</body>
</html>