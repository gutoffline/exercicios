<?php
include_once "conexao.php";
$id = $_POST['id'];
$descricao = $_POST['descricao'];
$sqlAlterar = "update t_tarefas set descricao = '$descricao' where id = $id";
mysqli_query($conexao, $sqlAlterar);
mysqli_close($conexao);
header("location: index.php?msg=alterado");
?>