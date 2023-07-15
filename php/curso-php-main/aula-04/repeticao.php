<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição</title>
</head>
<body>
    <h1>Repetição</h1>
    <?php
    //array
    $clientes = ["Guto","Cleyton","Renata","Pedro","Andrea","Ana", "Rodrigo"]; 
    $contador = 0;
    while($contador <= 6){
        echo "$clientes[$contador]<br>";
        $contador = $contador + 1;
    }
    ?>
</body>
</html>