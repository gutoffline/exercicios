<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $dados = "";
    
    if(file_exists("estudantes.txt")){
        $dados = "\n$nome \t$email";
    }else{
        $dados = "$nome \t$email";
    }

    $arquivo = fopen("estudantes.txt","a+");
    fwrite($arquivo, $dados);
    fclose($arquivo);
    /*
    $arquivo = fopen("estudantes.txt","r");
    $conteudo = fread($arquivo, filesize("estudantes.txt"));
    echo $conteudo;
    */
    ?>
    <main class="container">
        <div class="row">
            <div class="col"><h1>Listagem de estudantes</h1></div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="index.php" class="btn btn-link">Cadastrar novo estudante</a>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome - E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $arquivo = fopen("estudantes.txt","r");
                        while(!feof($arquivo)){
                            $linha = fgets($arquivo, 100);
                            echo "<tr>";
                            echo "<td>$linha</td>";
                            echo "</tr>";
                        }
                        fclose($arquivo);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</body>
</html>