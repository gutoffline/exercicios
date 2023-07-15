<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>002</title>
</head>
<body>
<?php
/* Faça um programa que exiba todos os números ímpares entre 0 e 100. */
for($i=0 ; $i <= 100 ; $i++){
    if($i % 2 != 0){
        echo $i . "<br>";
    }
}
?>
</body>
</html>