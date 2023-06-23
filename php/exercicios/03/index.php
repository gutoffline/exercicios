<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="get">
		Nome:<input name="nome"><br>
		Email:<input name="email"><br>
		Telefone:<input name="telefone"><br>
		País:<input name="pais"><br>
		<button type="submit">Salvar</button>
	</form>

	<?php
	if(isset($_GET["nome"])){
		$nome = $_GET["nome"];
		$email = $_GET["email"];
		$telefone = $_GET["telefone"];
		$pais = $_GET["pais"];
		$dados = [$nome,$telefone,$email,$pais];
		
		$arquivo = fopen("contatos.txt","a+");
		fputcsv($arquivo, $dados,";");
		fclose($arquivo);
	}
    ?>
</body>
</html>