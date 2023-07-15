<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD</title>
</head>
<body>
    <h1>Upload de arquivos</h1>
    <form method="post" action="upload.php" enctype="multipart/form-data">
        Selecione o arquivo: 
        <input type="file" name="arquivo">
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>