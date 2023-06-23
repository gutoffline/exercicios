<?php
$id = $_GET["id"];

include "conexao.php";

$sql_excluir_jogo = "delete from jogo where id = $id";

$jogo_excluido = mysqli_query($conexao, $sql_excluir_jogo);

mysqli_close($conexao);

header("location:listar-jogos.php?msg=excluido");
?>