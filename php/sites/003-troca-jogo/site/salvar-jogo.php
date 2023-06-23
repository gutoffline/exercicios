<?php
$titulo = $_POST["titulo"];
$video = $_POST["video"];
$foto = $_POST["foto"];
$categoria = $_POST["categoria"];

include "conexao.php";

$sql_inserir_jogo = "insert into jogo(titulo, video, foto, categoria) values('$titulo','$video','$foto', '$categoria')";

$um_jogo = mysqli_query($conexao, $sql_inserir_jogo);

mysqli_close($conexao);

header("location:listar-jogos.php?msg=sucesso");
?>