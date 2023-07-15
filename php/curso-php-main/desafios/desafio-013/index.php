<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro de estudantes</h1>
            </div>
        </div>
        <form class="row" action="cadastrar.php" method="post">
            <div class="col">
                <label class="form-label">Nome</label>
                <input class="form-control" placeholder="Nome" name="nome">
            </div>
            <div class="col">
                <label class="form-label">E-mail</label>
                <input class="form-control" type="email" name="email" placeholder="E-mail">
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>
    </main>
</body>
</html>