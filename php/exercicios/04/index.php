<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Status da lâmpada:<br>
        <select name="lampada">
            <option value="acesa">Acesa</option>
            <option value="apagada">Apagada</option>
        </select><br>
        <button type="submit">Enviar</button>
    </form>
    <?php
    $lampada = $_POST['lampada'] ?? "";
    if($lampada == "acesa"){
        echo "<img width='150' src='lamp-acesa.png'>";
    }else if($lampada == "apagada"){
        echo "<img width='150' src='lamp-apagada.png'>";
    }
    ?>
</body>
</html>