<?php
include_once "conexao.php";
$id = $_POST['id'];
$descricao = $_POST['descricao'];
$status = $_POST['status'];
$sqlAlterar = "update t_tarefas set descricao = '$descricao', status='$status' where id = $id";
mysqli_query($conexao, $sqlAlterar);
mysqli_close($conexao);
header("location: index.php?msg=alterado");
?>