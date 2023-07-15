<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .table tr:first-child{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col"><h1>Lista CSV</h1></div>
        </div>
        <div class="row">
            <div class="col">
                <?php
                if(file_exists("dados.csv")){
                    $arquivo = fopen("dados.csv","r");

                    echo "<table class='table'>";
                    while(($dados = fgetcsv($arquivo,100,";")) != FALSE){
                        echo "<tr>";
                        foreach($dados as $campo){
                            echo "<td>$campo</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                }else{
                    echo "Arquivo não encontrado";
                }
                ?>
            </div>
        </div>
    </main>
</body>
</html>
